@extends('template/master-template')
@section('title', 'postForm')
@section('content')

 @if ($errors->any())
  @foreach ($errors->all() as $error )
    <div class="text-red-500"> {{$error}}</div>
 @endforeach
 @endif

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
      <H1>Modification</H1> 
      <label for="name">Nom {{$product->name}}</label>
      <input type="text" name="name" id="text" placeholder="Nom du produit" >
    </div>
    <div class="form-example">
      <label for="email">Prix {{$product->price}} €</label>
      <input type="text" name="price" id="text" placeholder="Prix" value="{{$product->price}} €" >
    </div>
    
    <div class="form-example">
      <input type="submit" value="Valider">
    </div>
  </form>
  
 
  @endsection