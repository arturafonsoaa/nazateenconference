<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Exception;

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
}
