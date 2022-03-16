<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

 class ProductController extends Controller
{
  
    public function productbdd(){

        $products = DB::select('select * from products');
        return view('products/product-list',['a'=>$products]);

    }

    public function productId($id){
        $products = DB::select('select * from products where id = :id', array('id' => $id));
        return view('products/product-details',['id' => $id],['products'=>$products]);
 
     }

    public function productListName(){
           $products = Product::OrderBy('name')->get();
           return view('products/list/listname',['a'=>$products]);
        
    }
    public function productListPrice(){
            $products = Product::OrderBy('price')->get();
            return view('products/list/listprice',['a'=>$products]);
    }

    public function oneProduct(){
        $products = Product::orderBy('name')->first();
        return view('products/list/namePrice',['product'=>$products]);
    }
}

