<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('website.index');
Route::post('register-participant', [RegistrationController::class, 'registerParticipant'])->name('registerParticipant');

Route::middleware(['auth'])->prefix('painel')->name('admin.')->group(function() {

    Route::middleware(['password.verify-default'])->group(function() {
        Route::get('', [DashboardController::class, 'index'])->name('index');
        Route::post('enviar-comprovante', [PaymentController::class, 'sendPaymentVoucher'])->name('sendPaymentVoucher');
        Route::get('{registrationId}/baixar-comprovante', [PaymentController::class, 'downloadPaymentVoucher'])->name('downloadPaymentVoucher');
    });

    Route::get('alterar-senha', [DashboardController::class, 'changePassword'])->name('changePassword');
    Route::post('salvar-senha', [DashboardController::class, 'updatePassword'])->name('updatePassword');
});
