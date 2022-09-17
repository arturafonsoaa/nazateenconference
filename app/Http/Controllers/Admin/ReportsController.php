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
        }
    }
}
