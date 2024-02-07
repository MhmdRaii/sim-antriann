<?php

use App\Http\Controllers\RegistrationController;

Route::get('/registrasi', [RegistrationController::class, 'tampilkanFormRegistrasi'])->name('form.registrasi');
Route::post('/registrasi', [RegistrationController::class, 'prosesRegistrasi'])->name('proses.registrasi');
