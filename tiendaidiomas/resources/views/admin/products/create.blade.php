@extends('layouts.app')
@section('content') 
    Crea producto

    {!! Form::open([ 'route' => 'dashboard.store', 'method' => 'POST' ,  'files'=> true]) !!}
        @include('admin.products.partials.fields')
        <button type="submit" class=" form-control btn btn-success ">Guardar</button>
    {!! Form::close() !!}

@stop