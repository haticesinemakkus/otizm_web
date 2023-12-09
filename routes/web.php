<?php

use App\Http\Controllers\Frontend\DemandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Homecontroller;

Route::get('/', [Homecontroller::class, 'index'])->name('index');

Route::get('kvkk', function () {
    return view('web.kvkk');
 })->name('web.kvkk');


Route::group(['prefix' => '/demand'], function () {
    Route::post('/save', [DemandController::class, 'save'])->name('demand_save');
});


Route::get('/denizli-otizm-dernegi', [Homecontroller::class, 'denizliOtizm'])->name('denizliOtizm');
Route::get('/istanbul-otizm-dernegi', [Homecontroller::class, 'istanbulOtizm'])->name('istanbulOtizm');
Route::get('/amac', [Homecontroller::class, 'purpose'])->name('purpose');
Route::get('/neyi-hedefliyoruz', [Homecontroller::class, 'target'])->name('target');

