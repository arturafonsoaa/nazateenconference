<?php

namespace App\Jobs;

use App\Mail\RegistrationApproveMail;
use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendRegistrationApproveEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected Registration $registration;

    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    public function handle()
    {
        Mail::to($this->registration->user->email)
            ->send(new RegistrationApproveMail($this->registration));
    }
}
