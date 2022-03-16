@extends('template/master-template')
@section('title','oneProduct')
    @section('content')
        <h1> un produit</h1> 
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-title">{{$product->name}}</p> 
              <p class="card-text">{{$product->price}} € </p>
              <a href="{{url("/product/{$product->id}")}}" class="btn btn-primary">acheter</a>
            </div>
          </div>

      
    @endsection