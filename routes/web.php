<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
//initial Route
Route::get('/index', [BannerController::class, 'index'])->name('index');
//Banner route
Route::get('/banners', [BannerController::class, 'showBanners']);
Route::get('/banners/{id}', [BannerController::class, 'banner1'])->name('banner');
//Count route
Route::post('/increment', [BannerController::class, 'increment'])->name('increment');
