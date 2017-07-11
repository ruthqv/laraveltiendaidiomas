
<div class="form-group">
    {!! Form::label('sku', 'sku', ['for' => 'sku'] ) !!}
    {!! Form::text('sku', null , ['class' => 'form-control', 'id' => 'sku', 'placeholder' => 'Escribe el sku del producto...' ]  ) !!}

</div>
<div class="form-group">
    {!! Form::label('price', 'price', ['for' => 'price'] ) !!}
    {!! Form::text('price', null , ['class' => 'form-control', 'id' => 'price', 'placeholder' => 'Escribe el precio del producto...' ]  ) !!}

</div>

<div class="form-group">
    {!! Form::label('Image') !!}
    {!! Form::file('image', null) !!}
</div>

