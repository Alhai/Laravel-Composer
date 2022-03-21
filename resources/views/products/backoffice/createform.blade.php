@extends('template/master-template')
@section('title', 'CreateProduct')
@section('content')
<h1>Ajouter un article</h1>
<form action="{{route('product.store')}}" method="post" class="form-example">
    
       <!-- Le token CSRF -->
       @csrf 
       <label for="categories">Categories_id </label>
       <input type="text" name="categories_id" id="text" placeholder="catégorie du produit" >
     </div>
 
     <div class="form-example">
       <label for="name">Nom </label>
       <input type="text" name="name" id="text" placeholder="Nom du produit" >
     </div>
      <div class="form-example">
        <label for="email">Prix </label>
        <input type="text" name="price" id="text" placeholder="Prix" >
      </div>
      <div class="form-example">
        <label for="email">Réduction </label>
        <input type="text" name="discount" id="text" placeholder="Prix" >
      </div>
      <div class="form-example">
        <label for="email">Poids </label>
        <input type="text" name="weight" id="text" placeholder="Prix" >
      </div>
      <div class="form-example">
        <label for="email">Description </label>
        <input type="text" name="description" id="text" placeholder="Prix" >
      </div>
      <div class="form-example">
        <label for="email">Disponible </label>
        <input type="text" name="available" id="text" placeholder="Prix" >
      </div>
      <div class="form-example">
        <label for="email">Quantité </label>
        <input type="text" name="stock" id="text" placeholder="Prix" >
      </div>
     <div class="form-example">
       <input type="submit" value="Valider">
     </div>
   </form>

@endsection