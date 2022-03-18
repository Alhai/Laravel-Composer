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
        $products = Product::all();
        return view('products/backoffice/crudProduct',['a'=>$products]);


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
    public function store(Request $request,$id)
    {   
        $this->validate($request, [
            'categori' => 'bail|required|string|max:255',
            "picture" => 'bail|required|image|max:1024',
            "content" => 'bail|required',
            'title' => 'bail|required|string|max:255',
            "picture" => 'bail|required|image|max:1024',
            "content" => 'bail|required',
            'title' => 'bail|required|string|max:255',
            "picture" => 'bail|required|image|max:1024',
            "content" => 'bail|required',


        ]);

        $chemin_image = $request->picture->store('product');

        $product = Product::create($id);
        $product->categories_id = $request->input('categories_id');
        $product->name = $request->input('name');
        $product->picture_url = $chemin_image;
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->weight = $request->input('weight');
        $product->description = $request->input('description');
        $product->available = $request->input('available');
        $product->stock = $request->input('stock');

        return view('products.backoffice.createform',['product'=>$product]);

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
    return view('products.backoffice.crudProduct',$products);
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
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();
        return redirect()->route('product.index');

        // $products->update([
        //     'name' => $request->input('name'),
        //     'price'=> $request->input('price'),
        // ]);
        
        // return redirect()->route('product.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $id->delete();
        return redirect(route('product.index'));
    }
}
