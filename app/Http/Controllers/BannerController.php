<?php

namespace App\Http\Controllers;
use App\Models\Banner;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('index', compact('banners'));
    }
    public function banner1($id) {
        $banner = Banner::find($id);
        return view('banner1', compact('banner')); 
    }
}