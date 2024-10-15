<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [BannerController::class, 'index'])->name('index');
Route::get('/banners', [BannerController::class, 'showBanners']);
Route::get('/banners/{id}', [BannerController::class, 'banner1'])->name('banner1');