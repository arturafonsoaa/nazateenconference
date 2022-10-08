<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PaymentMethod;
use App\Enums\RegistrationStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Registration\ApproveRegistrationRequest;
use App\Jobs\SendRegistrationApproveEmailJob;
use App\Models\Registration;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        try {
            $registrations = Registration::query();

            if ($request->has('name') && !is_null($request->get('name'))) {
                $registrations->where('name', 'like', '%' . $request->get('name') . '%');
            }

            if ($request->has('status') && !is_null($request->get('status'))) {
                $registrations->whereStatus($request->get('status'));
            }

            if ($request->has('payment_method') && !is_null($request->get('payment_method'))) {
                $registrations->wherePaymentMethod($request->get('payment_method'));
            }

            if ($request->has('church') && !is_null($request->get('church'))) {
                $registrations->where('church', 'like', '%' . $request->get('church') . '%');
            }

            $paymentMethods = PaymentMethod::asSelectArray();
            unset($paymentMethods['gift_coupon']);

            return view('admin.registration.index', [
                'paymentMethods' => $paymentMethods,
                'registrationStatuses' => RegistrationStatus::asSelectArray(),
                'registrations' => $registrations->paginate(50)
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

    public function destroy(int $registrationId)
    {
        DB::beginTransaction();

        try {
            $registration = Registration::findOrFail($registrationId);
            $user = $registration->user;

            $registration->forceDelete();
            $user->delete();

            DB::commit();

            notify()->success('Inscrição excluída com sucesso!', 'Sucesso!');
            return to_route('admin.registration.index');
        } catch (Exception $e) {
            DB::rollBack();
            notify()->error($e->getMessage(), 'Erro');
            return to_route('admin.registration.index');
        }
    }
}
