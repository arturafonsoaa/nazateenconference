<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PaymentMethod;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Registration\ApproveRegistrationRequest;
use App\Jobs\SendRegistrationApproveEmailJob;
use App\Models\Registration;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index()
    {
        try {
            $paymentMethods = PaymentMethod::asSelectArray();
            unset($paymentMethods['gift_coupon']);

            return view('admin.registration.index', [
                'paymentMethods' => $paymentMethods,
                'registrations' => Registration::paginate(50)
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
            return to_route('admin.index');
        }
    }

    public function approve(ApproveRegistrationRequest $request, int $registrationId)
    {
        DB::beginTransaction();

        try {
            $registration = Registration::findOrFail($registrationId);
            $registration->update([
                'payment_method' => $request->get('payment_method'),
                'status' => 'approved'
            ]);

            dispatch(new SendRegistrationApproveEmailJob($registration));

            DB::commit();

            notify()->success('Inscrição aprovada com sucesso!', 'Sucesso!');
            return to_route('admin.registration.index');
        } catch (Exception $e) {
            DB::rollBack();
            notify()->error($e->getMessage(), 'Erro');
            return to_route('admin.registration.index');
        }
    }
}
