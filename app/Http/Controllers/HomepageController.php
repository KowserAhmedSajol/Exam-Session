<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\News;

class HomepageController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('is_active', 1)->get();
        $news = News::where('is_active', 1)->get();
        return view('welcome', compact('sliders', 'news'));
    }
}