<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});

Route::resource('mahasiswa',MahasiswaController::class);

Route::get('/change-languange{lang}', function ($id) {

});
