<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\RegisterParticipantRequest;
use App\Models\User;
use App\Services\RegistrationService;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function registerParticipant(RegisterParticipantRequest $request)
    {
        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make('123456'),
                'default_password' => true,
            ]);

            $user->registration()->create([
                'registration_code' => RegistrationService::generateRegistrationNumber(),
                'name' => $request->get('name'),
                'age' => $request->get('age'),
                'phone' => $request->get('phone'),
                'message' => $request->get('message'),
                'registration_type' => $request->get('registration_type')
            ]);

            $user->syncRoles(['registration']);

            DB::commit();

            Auth::loginUsingId($user->id);

            return to_route('admin.index');
        } catch (Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            return redirect()->back();
        }
    }
}
