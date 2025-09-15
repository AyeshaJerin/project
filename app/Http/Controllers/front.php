<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class front extends Controller
{
    function welcome() {
        return view ('welcome');
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
