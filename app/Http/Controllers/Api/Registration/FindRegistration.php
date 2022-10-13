<?php

namespace App\Http\Controllers\Api\Registration;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Exception;
use Illuminate\Http\Response;

class FindRegistration extends Controller
{
    public function __invoke(int $registrationId)
    {
        try {
            return response()->json([
                'data' => [
                    'registration' => Registration::findOrFail($registrationId)
                ]
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->json_encode
            ], Response::HTTP_NOT_FOUND);
        }
    }
}
