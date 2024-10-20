<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
//initial Route
Route::get('/', [BannerController::class, 'index'])->name('index');
//Banner route
Route::get('/banners', [BannerController::class, 'showBanners']);
Route::get('/banners/{id}', [BannerController::class, 'banner'])->name('banner');
//Count route
Route::post('/increment', [BannerController::class, 'increment'])->name('increment');