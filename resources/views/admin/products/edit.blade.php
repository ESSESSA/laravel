@extends("admin.layouts.template")

@section('contenu')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Modifier  produit</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" method="post" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
        @csrf
        @method("put")
      <div class="card-body">
        <div class="form-group">
          <label for="name">Nom produit</label>
          <input type="text" name="name" value="{{ $product->name }}" class="form-control" @error("name") border-danger @enderror placeholder="Entrer le nom du produit">
          @error("name")
        <div class="text text-danger">{{ $message }}</div>

          @enderror
        </div>

        <div class="form-group">
            <label for="description">description produit</label>
            <textarea name="description"  class="form-control @error("description") border-danger @enderror" id="description" placeholder="Entrer la description du produit">{{  $product->description }}</textarea>
            @error("description")
          <div class="text text-danger">{{ $message }}</div>

            @enderror
          </div>

          <div class="form-group">
            <img src="{{ asset('images/products/'.$product->photo1) }}" width="150">
            <label for="photo1">photo1 du produit</label>
            <input type="file" name="photo1" value="{{  $product->photo1 }}" class="form-control @error("photo1") border-danger @enderror" id="photo1">
            @error("photo1")
          <div class="text text-danger">{{ $message }}</div>

            @enderror
          </div>

          <div class="form-group">
            <img src="{{ asset('images/products/'.$product->photo2) }}" width="150">
            <label for="photo2">photo2 du produit</label>
            <input type="file" name="photo2" value="{{  $product->photo2 }}" class="form-control @error("photo2") border-danger @enderror" id="photo2">
            @error("photo2")
          <div class="text text-danger">{{ $message }}</div>

            @enderror
          </div>


          <div class="form-group">
            <label for="price">prix du produit</label>
            <input type="number" name="price" value="{{  $product->price }}" class="form-control @error("price") border-danger @enderror"  id="price" placeholder="Entrer le prix du produit">
            @error("name")
          <div class="text text-danger">{{ $message }}</div>

            @enderror
          </div>

          <div class="form-group">
            <label for="category_id">category_id du produit</label>
            <select name="name"  class="form-control" @error("category_id") border-danger @enderror id="category_id">
             <option value="">--- choisir ---</option>
             @foreach ($categories as $category )
             <option value="{{$category->id}}" @if ($product->category_id==$category->id) selected @endif>{{$category->name}}</option>
             @endforeach

            </select>

            @error("category_id")
          <div class="text text-danger">{{ $message }}</div>

            @enderror
          </div>


      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Modifierf</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
      </div>
    </form>
  </div>
@endsection
