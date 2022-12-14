<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CertificateInfoController;
use App\Http\Controllers\CustomAuthController;



Route::get('/', function () {
    return view('layout.home');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/course', function () {
    return view('pages.course');
});

Route::get('/admission', function () {
    return view('admission');
});
Route::get('/certificateinfo', function () {
    return view('pages.certificateinfo');
});

Route::get('/confirmmsg', function () {
    return view('pages.confirmmsg');
});

Route::get('/applicationform', function () {
    return view('pages.applicationForm');
});

Route::post('/dataRegister', [UsersController::class, 'dataStore'])->name("dataRegister");
Route::get('/registration/course', [UsersController::class, 'courseRegistration'])->name("courseRegistration");
Route::get('/certificateinfo', [UsersController::class, 'certificateinfo'])->name("certificateinfo");
Route::get('/confirmmsg', [UsersController::class, 'confirmmsg'])->name("confirmmsg");

Route::post('/infoRegister', [CertificateInfoController::class, 'store'])->name("infoRegister");

Route::post('/applicationform', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



// Route::auth();





