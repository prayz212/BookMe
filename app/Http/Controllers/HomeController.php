<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage() {
        return view('pages/homepage');
    }

    public function productlist() {
        return view('productlist');
    }

    public function product() {
        return view('product');
    }
}
