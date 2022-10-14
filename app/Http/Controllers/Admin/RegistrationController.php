<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PaymentMethod;
use App\Enums\RegistrationStatus;
use App\Enums\RegistrationType;
use App\Exports\RegistrationsPdfExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Registration\ApproveRegistrationRequest;
use App\Http\Requests\Admin\Registration\CheckinRequest;
use App\Http\Requests\Admin\Registration\UpdateRegistrationRequest;
use App\Jobs\SendRegistrationApproveEmailJob;
use App\Models\Registration;
use Carbon\Carbon;
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

            if ($request->has('registration_type') && !is_null($request->get('registration_type'))) {
                $registrations->whereRegistrationType($request->get('registration_type'));
            }

            if ($request->has('church') && !is_null($request->get('church'))) {
                $registrations->where('church', 'like', '%' . $request->get('church') . '%');
            }

            $fromDate = ($request->has('from_date') && !is_null($request->get('from_date'))) ?
                Carbon::createFromFormat('d/m/Y', $request->get('from_date'))->startOfDay() :
                Carbon::createFromFormat('Y', '2020');

            $toDate = ($request->has('to_date') && !is_null($request->get('to_date'))) ?
                Carbon::createFromFormat('d/m/Y', $request->get('to_date'))->endOfDay() :
                Carbon::today()->endOfDay();

            $registrations->whereBetween('created_at', [$fromDate, $toDate]);

            $paymentMethods = PaymentMethod::asSelectArray();
            unset($paymentMethods['gift_coupon']);

            return view('admin.registration.index', [
                'paymentMethods' => $paymentMethods,
                'registrationStatuses' => RegistrationStatus::asSelectArray(),
                'registrationTypes' => RegistrationType::asSelectArray(),
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

    public function edit(int $registrationId)
    {
        try {
            return view('admin.registration.edit', [
                'registration' => Registration::findOrFail($registrationId)
            ]);
        } catch (Exception $e) {
            notify()->error($e->getMessage(), 'Erro');
            return to_route('admin.registration.index');
        }
    }

    public function update(UpdateRegistrationRequest $request, int $registrationId)
    {
        DB::beginTransaction();

        try {
            $registration = Registration::findOrFail($registrationId);

            $registration->update([
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'church' => $request->get('church')
            ]);

            $user = $registration->user;

            $user->update([
                'name' => $request->get('name'),
                'email' => $request->get('email')
            ]);

            DB::commit();
            return to_route('admin.registration.index', ['name' => $registration->name]);
        } catch (Exception $e) {
            DB::rollBack();
            notify()->error('Não foi possível atualizar o cadastro' . $e->getMessage(), 'Erro');
            return redirect()->back();
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

    public function checkin(CheckinRequest $request, int $registrationId)
    {
        DB::beginTransaction();

        try {
            $registration = Registration::findOrFail($registrationId);

            $registration->update([
                'present_on_the_first_day' => true,
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'church' => $request->get('church')
            ]);

            $user = $registration->user;

            $user->update([
                'name' => $request->get('name'),
                'email' => $request->get('email')
            ]);

            DB::commit();
            notify()->success('Checkin realizado com sucesso com sucesso!', 'Sucesso!');
            return to_route('admin.registration.index');
        } catch (Exception $e) {
            DB::rollBack();
            notify()->error($e->getMessage(), 'Erro');
            return to_route('admin.registration.index');
        }
    }

    public function exportPdf(Request $request)
    {
        try {
            return (new RegistrationsPdfExport($request->collect()))->download('cadastros.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
