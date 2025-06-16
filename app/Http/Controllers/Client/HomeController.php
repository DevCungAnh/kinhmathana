<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
            
        return view('client.home', compact('sliders'));
    }
} 