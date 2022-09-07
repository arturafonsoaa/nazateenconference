<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendRegistrationApproveEmailJob;
use App\Models\Registration;
use Exception;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index()
    {
        try {
            return view('admin.registration.index', [
                'registrations' => Registration::paginate(50)
            ]);
        } catch (Exception $e) {
            return to_route('admin.index');
        }
    }

    public function approve(int $registrationId)
    {
        DB::beginTransaction();

        try {
            $registration = Registration::findOrFail($registrationId);
            $registration->update([
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
