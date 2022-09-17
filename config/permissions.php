<?php

return [
    'admin.index' => ['admin', 'registration'],

    'admin.sendPaymentVoucher' => ['admin', 'registration'],
    'admin.downloadPaymentVoucher' => ['admin', 'registration'],

    'admin.adminUser.index' => ['admin'],
    'admin.adminUser.store' => ['admin'],
    'admin.adminUser.create' => ['admin'],
    'admin.adminUser.show' => ['admin'],
    'admin.adminUser.update' => ['admin'],
    'admin.adminUser.destroy' => ['admin'],
    'admin.adminUser.edit' => ['admin'],

    'admin.registration.index' => ['admin'],
    'admin.registration.approve' => ['admin'],

    'admin.reports.index' => ['admin'],
    'admin.reports.registrationsPerDay' => ['admin'],

    'admin.changePassword' => ['admin', 'registration'],
    'admin.updatePassword' => ['admin', 'registration'],
];
