@extends('template/master-template')
@section('title', 'CreateProduct')
@section('content')
<h1>Ajouter un article</h1>

<form action="{{route('product.store')}}" method="post" class="form-example">
    
       <!-- Le token CSRF -->
       @csrf 
       <label for="categories">Categories_id </label>
       <input id="text" type="text" name="categories_id" class="@error('title') is-invalid @enderror">
     </div>
 
     <div class="form-example">
       <label for="name">Nom </label>
       <input id="text" type="text" name="name" class="@error('title') is-invalid @enderror">
     </div>
      <div class="form-example">
        <label for="email">Prix </label>
        <input id="text" type="text" name="price" class="@error('title') is-invalid @enderror">
      </div>
      <div class="form-example">
        <label for="email">Réduction </label>
        <input id="text" type="text" name="discount" class="@error('title') is-invalid @enderror">
      </div>
      <div class="form-example">
        <label for="email">Poids </label>
        <input id="text" type="text" name="weight" class="@error('title') is-invalid @enderror">
      </div>
      <div class="form-example">
        <label for="email">Description </label>
        <input id="text" type="text" name="description" class="@error('title') is-invalid @enderror">
      </div>
      <div class="form-example">
        <label for="email">Disponible </label>
        <input id="text" type="text" name="available" class="@error('title') is-invalid @enderror">
      </div>
      <div class="form-example">
        <label for="email">Quantité </label>
        <input id="text" type="text" name="stock" class="@error('title') is-invalid @enderror">
      </div>
      <div class="form-example">
        <input type="submit" value="Valider">
      </div>
   </form>

@endsection