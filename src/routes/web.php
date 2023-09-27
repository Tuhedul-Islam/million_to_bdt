<?php

use Illuminate\Support\Facades\Route;
use Touhid\MillionToBdt\Http\Controllers\MillionToBdtController;


//Route::group(['namespace'=>'Touhid\MillionToBdt\Http\Controllers'], function (){
//    Route::get('million-to-bdt', 'MillionToBdtController@index');
//
//});


Route::get('million-to-bdt', [MillionToBdtController::class, 'index']);
