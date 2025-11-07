<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage']);

Route::get('/welcome', [PublicController::class,'homepage2']);

Route::get('/chisiamo', [PublicController::class, 'chisiamo'])->name('chisiamo');

Route::get('/chisiamo-detail/{name}', [PublicController::class, 'chisiamodetail'])->name('chisiamo-detail');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');

//Invio email nuova rotta

Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');

