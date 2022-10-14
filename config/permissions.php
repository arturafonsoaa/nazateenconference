<?php

return [
    'admin.index' => ['admin', 'registration', 'acquirer'],

    'admin.sendPaymentVoucher' => ['admin', 'registration'],
    'admin.downloadPaymentVoucher' => ['admin', 'registration'],

    'admin.adminUser.index' => ['admin'],
    'admin.adminUser.store' => ['admin'],
    'admin.adminUser.create' => ['admin'],
    'admin.adminUser.show' => ['admin'],
    'admin.adminUser.update' => ['admin'],
    'admin.adminUser.destroy' => ['admin'],
    'admin.adminUser.edit' => ['admin'],

    'admin.acquirerUser.index' => ['admin'],
    'admin.acquirerUser.store' => ['admin'],
    'admin.acquirerUser.create' => ['admin'],
    'admin.acquirerUser.show' => ['admin'],
    'admin.acquirerUser.update' => ['admin'],
    'admin.acquirerUser.destroy' => ['admin'],
    'admin.acquirerUser.edit' => ['admin'],

    'admin.registration.index' => ['admin', 'acquirer'],
    'admin.registration.approve' => ['admin'],
    'admin.registration.edit' => ['admin', 'acquirer'],
    'admin.registration.update' => ['admin', 'acquirer'],
    'admin.registration.destroy' => ['admin'],
    'admin.registration.checkin' => ['admin', 'acquirer'],
    'admin.registration.exportPdf' => ['admin', 'acquirer'],

    'admin.reports.index' => ['admin'],
    'admin.reports.registrationsPerDay' => ['admin'],
    'admin.reports.paymentMethod' => ['admin'],
    'admin.reports.churchReport' => ['admin'],

    'admin.changePassword' => ['admin', 'registration', 'acquirer'],
    'admin.updatePassword' => ['admin', 'registration', 'acquirer'],
];
