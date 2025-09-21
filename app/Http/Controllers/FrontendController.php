<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home() {
        $feature_product=\App\Models\Product::where('is_featured',1)->where('is_active',1)->get();
        return view ('home',compact('feature_product'));
    }

    function about() {
        return view ('about');
    }

    function products() {
        return view ('products');
    }

    function store() {
        return view ('store');
    }

    function contact() {
        return view ('contact');
    }

    function blog() {
        return view ('blog');
    }

    function testimonial() {
        return view ('testimonial');
    }

    function features() {
        return view ('features');
    }
}
