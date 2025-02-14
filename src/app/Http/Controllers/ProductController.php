<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_season;
use App\Models\Season;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    public function index(ProductRequest $request)
    {
        $form = $request->all();
        Product::create($form); 
        return redirect('/producs');
    }

    public function create()
    {
        return view('create');
    }

    public function search()
    {
        return view('search');

    }

}
