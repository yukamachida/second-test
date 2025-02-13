<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;
use App\Http\Models\Product_season;
use App\Http\Models\Season;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function search()
    {
        return view('search');

    }

}
