@extends('template/master-template')
@section('title','product-details')
    @section('content')
     <h1>Fiche du Produit </h1>
  
        @foreach ($products as $product )   
     <div class="card" style="width: 18rem;">
        <img src="{{$product->picture_url}}" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p>{{$product->price}}€</p>
          <input type="number" id="tentacles" name="tentacles">
          <a href="#" class="btn btn-primary">Acheter</a>
        </div>
      </div>
      @endforeach 
    @endsection