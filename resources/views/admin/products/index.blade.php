@extends("admin.layouts.template")

@section('contenu')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des produits</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        @if (Session::has("message"))
        <div class="alert alert-success"->{{ Session::get('message') }}</div>
        @endif
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Name</th>
          <th>description</th>
          <th>price</th>
          <th>photo1</th>
          <th>photo2</th>
          <th>product_id</th>
          <th>Action</th>
        </tr>
        </thead>

        <tbody>
@forelse ($products as $product)
<tr>
          <td>{{ $product->name}}</td>
          <td>{{ $product->description}}</td>
          <td>{{ $product->price}}</td>
          <td><img width="70" src="{{asset('images/products/'.$product->photo1 )}}"></td>
          <td><img width="70" src="{{asset('images/products/'.$product->photo2 )}}"></td>
          <td>{{ $product->category->name}}</td>
          <td>
            <a href= "{{ route('products.edit',$product->id)}}"><button class="btn btn-success">Modifier</button></a>

            <form class="d-inline" action="{{ route('products.destroy',$product->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger" onclick="return confirm('etes vous sure de supprimer?')">Supprimer</button>
            </form>
        </td>
</tr>
@empty
<tr> <td colspan="7">No data found</td></tr>
@endforelse

        </tbody>
        <tfoot>
        <tr>
          <th>Name</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  @endsection
