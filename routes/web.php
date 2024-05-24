<?php

use Illuminate\Support\Facades\Route;
use Nharavel\Contactform\Http\Controllers\ContactFormController;


Route::middleware(['guest', 'web'])->group(function () {
    Route::get('/contact', [ContactFormController::class, 'create']);
    Route::post('/submit/message', [ContactFormController::class, 'store']);
    Route::get('/contact/list', [ContactFormController::class,'index']);
});
