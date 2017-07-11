@extends('layouts.app')
@section('content')

<section>
	<div class="row text-center">
	<h1>{{ trans('welcome.shop')}}</h1>

	@include('layouts.slider')
	</div>
</section>

<section>
	<div class="row text-center">

	<div class="grid">
		<h1>{{ trans('welcome.shop')}}</h1>
	@foreach ($products as $prod)
		<figure class="effect-lily">
		    <img class="img-responsive"  src="{{ asset('/images') }}/{{ $prod->image }}" alt="">
			<figcaption>
					<div>
						<h2>{{ $prod->name }}</h2>
						<p> {{ $prod->description }}</p>
						<button class="btn btn-custom"><a href="products/{{ $prod->id_product }}">{{ trans('welcome.see')}}</a></button>
 						<button class="btn btn-custom"><a href="cart/add/{{ $prod->id_product }}">{{ trans('welcome.addtocart')}}</a></button>
					</div>
			  
			</figcaption>			
		</figure>
	@endforeach 
	</div>				

	</div>
</section>

@stop
