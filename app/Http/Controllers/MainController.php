<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function category($code) {
        $categories = Category::get();
        $category = Category::where('code', $code)->first();
        return view('category', compact('category', 'categories'));
    }

    public function categories() {
        $categories = Category::get();
        return view ('categories', compact('categories'));
    }
}
