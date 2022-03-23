@extends('template/master-template')
@section('title', 'CreateProduct')
@section('content')
<h1>Ajouter un article</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{route('product.store')}}" method="post" class="form-example">
    
       @csrf 
       <label for="categories">Categories_id </label>
       <input id="text" type="text" name="categories_id" class="@error('title') is-invalid @enderror">
       @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
     </div>
 
     <div class="form-example">
       <label for="name">Nom </label>
       <input id="text" type="text" name="name" class="@error('title') is-invalid @enderror">
       @error('title')
       <div class="alert alert-danger">{{ $message }}</div>
   @enderror
      </div>
      <div class="form-example">
        <label for="price">Prix </label>
        <input id="text" type="text" name="price" class="@error('title') is-invalid @enderror">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="form-example">
        <label for="discount">Réduction </label>
        <input id="text" type="text" name="discount" class="@error('title') is-invalid @enderror">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="form-example">
        <label for="weight">Poids </label>
        <input id="text" type="text" name="weight" class="@error('title') is-invalid @enderror">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="form-example">
        <label for="description">Description </label>
        <input id="text" type="text" name="description" class="@error('title') is-invalid @enderror">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="form-example">
        <label for="available">Disponible </label>
        <input id="text" type="text" name="available" class="@error('title') is-invalid @enderror">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="form-example">
        <label for="stock">Quantité </label>
        <input id="text" type="text" name="stock" class="@error('title') is-invalid @enderror">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="form-example">
        <input type="submit" value="Valider">
      </div>
   </form>

@endsection