<?php

use App\Http\Controllers\PercobaanController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kenalan', [PercobaanController::class, 'kenalan']);

Route::get('/about', function () {
    return view('about', [
        'name'  => 'Zalfa Ajeng Suardafa',
        'email' => 'ajeng.suardafa@mail.ugm.ac.id',
    ]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');