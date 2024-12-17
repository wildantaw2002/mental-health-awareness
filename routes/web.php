<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\artikelController;

Route::get('/', function () {
    return view('index');
});

Route::get('/kontak', function () {
    return view('contact'); //mengarahkan ke view contact
});


Route::get('/artikel',  [artikelController::class,'tampil'])->name('artikel.tampil');

Route::get('/artikel/tambah',  [artikelController::class,'tambah'])->name('artikel.tambah');

Route::post('/artikel/submit', [artikelController::class, 'submit'])->name('artikel.submit');

Route::get('/artikel/edit', [artikelController::class, 'edit'])->name('artikel.edit');




