<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdatePasswordRequest;
use App\Models\Registration;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOfRegistrations = Registration::where('status', '!=', 'refused')->count();
        $approvedRegistrations = Registration::whereStatus('approved')->count();
        $underAnalysisRegistrations = Registration::whereStatus('under_analysis')->count();
        $pendingPaymentRegistrations = Registration::whereStatus('pending_payment')->count();

        return view('admin.index', [
            'user' => auth()->user(),
            'totalOfRegistrations' => $totalOfRegistrations,
            'approvedRegistrations' => $approvedRegistrations,
            'underAnalysisRegistrations' => $underAnalysisRegistrations,
            'pendingPaymentRegistrations' => $pendingPaymentRegistrations,
        ]);
    }

    public function changePassword()
    {
        return view('admin.change-pawword');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        DB::beginTransaction();

        try {
            $user = auth()->user();

            $user->update([
                'password' => Hash::make($request->get('password')),
                'default_password' => false
            ]);

            DB::commit();
            return to_route('admin.index');
        } catch (Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            return redirect()->back();
        }
    }
}
