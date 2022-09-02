<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UploadPaymentVoucherRequest;
use App\Models\Registration;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function sendPaymentVoucher(UploadPaymentVoucherRequest $request)
    {
        DB::beginTransaction();
        try {
            $fileName = time() . '_' . $request->file('payment_voucher')->getClientOriginalName();
            $filePath = $request->file('payment_voucher')->storeAs('vouchers', $fileName, 'public');

            auth()->user()->registration->update([
                'payment_method' => 'pix',
                'payment_voucher' => $filePath,
                'status' => 'under_analysis'
            ]);

            DB::commit();
            return to_route('admin.index');
        } catch (Exception $e) {
            DB::rollBack();
            return to_route('admin.index');
        }
    }

    public function downloadPaymentVoucher(int $registrationId)
    {
        try {
            $registration = Registration::find($registrationId);
            $voucher = public_path('storage/' . $registration->payment_voucher);

            return response()->download($voucher);
        } catch (Exception $e) {
            dd($e->getMessage());
            return to_route('admin.index');
        }
    }
}
