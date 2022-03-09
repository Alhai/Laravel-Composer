<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Product(){
        return view('product-list');
    }
    public function productId($id){
        return view('product-details',['id' => $id]);
    }
}
