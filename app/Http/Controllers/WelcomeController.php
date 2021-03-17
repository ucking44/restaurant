<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Slider;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $items = Item::all();
        $sliders = Slider::all();
        $categories = Category::all();
        return view('welcome', compact('items', 'sliders', 'categories'));
    }
}
