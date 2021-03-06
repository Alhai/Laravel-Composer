@extends('template/master-template')
@section('title','list-name')
    @section('content')
        <h1> Liste des produits par ordre alphabétique </h1> 
        @foreach ($a as $product )
        
        <div class="card" style="width: 18rem;">
            <img src="{{$product->picture_url}}" alt="">
            <div class="card-body">
              <p class="card-title">{{$product->name}}</p> 
              <p class="card-text">{{$product->price}} € </p>
              <a href="{{route("/product/{$product->id}")}}" class="btn btn-primary">acheter</a>
            </div>
          </div>
      
        @endforeach
      
    @endsection