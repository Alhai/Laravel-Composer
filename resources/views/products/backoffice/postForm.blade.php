@extends('template/master-template')
@section('title', 'postForm')
@section('content')


<div class="card" style="width: 18rem;">
   <img src="{{$product->picture_url}}" alt="">
   <div class="card-body">
     <h5 class="card-title">{{$product->name}}</h5>
     <p class="card-text">{{$product->description}}</p>
     <p>{{$product->price}}€</p>
   </div>
 </div> 



<form action="{{route('product.update',$product->id)}}" method="post" class="form-example">
   @method('PUT')
      <!-- Le token CSRF -->
      @csrf 
      <label for="name">Modifier Nom {{$product->name}}</label>
      <input type="text" name="name" id="text" placeholder="Nom" >
    </div>
    <div class="form-example">
      <label for="email">Modifier Prix {{$product->price}} €</label>
      <input type="text" name="price" id="text" placeholder="Prix" >
    </div>
    <div class="form-example">
      <input type="submit" value="Valider">
    </div>
  </form>
  
 
  @endsection