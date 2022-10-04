<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('website.index');
Route::post('register-participant', [RegistrationController::class, 'registerParticipant'])->name('registerParticipant');

Route::middleware(['auth', 'permission.check'])->prefix('painel')->name('admin.')->group(function () {

    Route::middleware(['password.verify-default'])->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('index');

        Route::post('enviar-comprovante', [PaymentController::class, 'sendPaymentVoucher'])->name('sendPaymentVoucher');
        Route::get('{registrationId}/baixar-comprovante', [PaymentController::class, 'downloadPaymentVoucher'])->name('downloadPaymentVoucher');

        Route::prefix('administradores')->name('adminUser.')->group(function () {
            Route::resource('', AdminUserController::class)->parameters([
                '' => 'adminUserId'
            ]);
        });

        Route::prefix('registros')->name('registration.')->group(function () {
            Route::get('', [AdminRegistrationController::class, 'index'])->name('index');
            Route::post('{registrationId}/aprovar-cadastro', [AdminRegistrationController::class, 'approve'])->name('approve');
            Route::delete('{registrationId}/apagar-cadastro', [AdminRegistrationController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('relatorios')->name('reports.')->group(function() {
            Route::get('inscricoes-por-dia', [ReportsController::class, 'registrationsPerDay'])->name('registrationsPerDay');
            Route::get('metodos-de-pagamento', [ReportsController::class, 'paymentMethod'])->name('paymentMethod');
        });
    });

    Route::get('alterar-senha', [DashboardController::class, 'changePassword'])->name('changePassword');
    Route::post('salvar-senha', [DashboardController::class, 'updatePassword'])->name('updatePassword');
});
