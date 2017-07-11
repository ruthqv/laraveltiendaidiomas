@extends('layouts.app')
@section('content')

<div class="row">

@foreach ($product as $prod)
  <div class="col-sm-6 text-center">

      <img class="img-thumbnail img-fluid"  src="{{ asset('/images') }}/{{ $prod->image }}" alt="">

  </div>
      <div class="col-sm-6 text-center">

      <h1> {{ $prod->name }} <small>{{ $prod->sku }}</small> </h1>  
      <h3>{{ $prod->price }}</h3>
      <p>{{ $prod->description }}</p> 
      <button class="btn btn-custom"><a href="{{ URL::route('cart-add', array('id' => $prod->id_product)) }}">{{ trans('welcome.addtocart')}}</a></button>


      

    </div>
  </div>
@endforeach 

</div>

@stop