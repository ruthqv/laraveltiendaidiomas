@extends('layouts.app')
@section('content') 
<h1 class="text-primary">Control de productos</h1>
 <a href="{{ url('admin/dashboard/create') }}" class="btn btn-info btn-xs">Crear nuevo</a>
<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Image</th>
        <th class="text-center">SKU</th>
        <th class="text-center">Description</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
        <tr>
            <td class="text-center">{{ $product->id_product }}</td>
            <td class="text-center">{{ $product->name }}</td>
            <td class="text-center">{{ $product->price }}</td>
            <td class="text-center"><img src="{{ asset('/images') }}/{{ $product->image }}" width="100px" alt=""></td>
            <td class="text-center">{{ $product->sku }}</td>
            <td class="text-center">{{ $product->description }}</td>
     
        {!! Form::open(['route' => ['dashboard.destroy', $product->id_product], 'method' => 'DELETE']) !!}


            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/products/'.$product->id.'/edit') }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}


        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Imagen</th>   
        <th class="text-center">SKU</th>
        <th class="text-center">Description</th>

        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>


@endsection