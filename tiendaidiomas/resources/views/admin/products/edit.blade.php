 
    <h4 class="text-center">Editar Pastel:
     {{ $pastel->nombre  }}</h4>
    {!! Form::model($pastel, [ 'route' => ['pasteles.update', $pastel], 'method' => 'PUT']) !!}
        @include('pasteles.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}


