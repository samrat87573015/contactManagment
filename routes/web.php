<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});


//Route::get('/contacts', [ContactController::class, 'index']);
//Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contact.show');
//Route::get('/contacts/create', [ContactController::class, 'create'])->name('contact.create');

Route::resource('contacts', ContactController::class);
