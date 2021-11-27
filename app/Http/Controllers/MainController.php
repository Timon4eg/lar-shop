<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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
        $products = Product::get();
        return view('category', compact('category', 'categories', 'products'));
    }

    public function categories() {
        $categories = Category::get();
        $products = Product::get();
        return view ('categories', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function product($category, $product = null) {
        return view('product', ['product' => $product]);
    }
}
