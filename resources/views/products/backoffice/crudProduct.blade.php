@extends('template/master-template')
@section('title', 'backoffice')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prix</th>
        <th scope="col">Acheter</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>


    <tbody> 
        @foreach ($a as $product)
      <tr>
         
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->price}} €</td>
        
        <td><a href="{{route('product_id',['id'=>$product->id])}}" class="btn btn-primary">acheter</a></td>
        <td><a href="{{route('product.edit', $product)}}" class="btn btn-success">modifier</a></td>
       <td> <form id="delete-form" method="POST" action="{{route('product.destroy',$product->id)}}"><button type="submit" class="btn btn-danger" >supprimer</button> 
          {{ csrf_field() }}
    {{  method_field('DELETE') }}</form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
<a href="{{route('product.create')}}" class="btn btn-primary">Ajouter un produit </a>
@endsection