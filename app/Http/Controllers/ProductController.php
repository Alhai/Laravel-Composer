<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function productbdd()
    {
        $products = DB::select('select * from products');
        
        
        return view('product-list',['a'=>$products]);

    }
    // public function Product(){
    //     return view('product-list');
    // }
    public function productId($id){
        $products = DB::select('select * from products where id = :id', array('id' => $id));
        return view('product-details',['id' => $id],['products'=>$products]);
 
    }
}
