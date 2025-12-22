<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// wisata
Route::get('/wisata', function () {
    return view('wisata');
});

Route::get('jasan', function () {
    return view('wisata.jasan');
});
Route::get('kawi', function () {
    return view('wisata.kawi');
});

Route::get('pesiraman', function () {
    return view('wisata.pesiraman');
});

Route::get('alam', function () {
    return view('wisata.alam');
});

// galeri
Route::get('/media', function () {
    return view('galeri');
});


// email
use App\Http\Controllers\ContactController;

Route::get('/hubungi', function () {
    return view('hubungi');
});

Route::post('/hubungi/kirim', [ContactController::class, 'send'])
    ->name('hubungi.kirim');

