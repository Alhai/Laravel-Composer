<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('products/backoffice/CrudProduct',['a'=>$product]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
      
        return view('products.backoffice.createform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,)
    {   
        

        $product = Product::create([
       "categories_id "=> $request->input('categories_id'),
        "name" => $request->input('name'),
        "price" => $request->input('price'),
       "discount" => $request->input('discount'),
       "weight" => $request->input('weight'),
        "description" => $request->input('description'),
        "available" => $request->input('available'),
        "stock" => $request->input('stock')
    ]);
        

        return view('products.backoffice.CrudProduct',['product'=>$product]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products)
    {
        $products = Product::all();
    return view('products.backoffice.CrudProduct',$products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $product = Product::find($id);
        return view('products.backoffice.postForm',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $request->validate([
            'name' => 'required',
            'price' => 'required' ]);
     
       
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        
        $product->save();
        return redirect()->route('product.index');

           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
}
}

