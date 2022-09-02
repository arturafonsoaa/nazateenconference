<?php

namespace App\Services;

use App\Models\Registration;

class RegistrationService
{
    public static function generateRegistrationNumber()
    {
        do {
            $registrationCode = 'M' . strval(random_int(100000, 999999));
        } while (Registration::where("registration_code", $registrationCode)->first());

        return $registrationCode;
    }
}
