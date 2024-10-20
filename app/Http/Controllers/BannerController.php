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
    public function banner($id)
    {
        $banner = Banner::find($id);

        return view('banner', compact('banner'));
    }

    public function increment(Request $request)
    {
        $model = Banner::find($request->id);
        
        $model->increment('count');

        return response()->json(['new_value' => $model->count]);
    }
}