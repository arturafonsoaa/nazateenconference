<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Exception;

class ReportsController extends Controller
{
    public function registrationsPerDay()
    {
        try {
            $registrations = Registration::get()->groupBy('br_date')->toArray();

            return view('admin.reports.registrations-per-day', [
                'registrations' => $registrations
            ]);
        } catch (Exception $e) {
            return to_route('admin.index');
        }
    }

    public function paymentMethod()
    {
        try {
            $paymentMethods = Registration::where('status', 'approved')->get()->groupBy('payment_method');

            return view('admin.reports.payment-method', [
                'paymentMethods' => $paymentMethods
            ]);
        } catch (Exception $e) {
            return to_route('admin.index');
        }
    }

    public function churchReport()
    {
        try {
            $churches = Registration::all()->groupBy('church');

            return view('admin.reports.church', [
                'churches' => $churches
            ]);
        } catch (Exception $e) {
            return to_route('admin.index');
        }
    }
}
