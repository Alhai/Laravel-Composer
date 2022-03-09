<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Product(){
        return view('product-details');
    }
    public function productId($id){
        return ('product-list');
    }
}
