<?php

namespace App\Http\Controllers\Website;

use App\Enums\RegistrationType;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.index', [
            'registrationTypes' => RegistrationType::asSelectArray()
        ]);
    }
}
