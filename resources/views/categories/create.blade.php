@extends('layouts.app')
@section('content')

<div class="container">
index de categories 

    <div class="card">
        <div class="card-header bg-danger text-white">
        Ingreso de Categorias
        </div>
        <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">REGRESAR</a>
        <!--<a href="" class="btn btn-primary">AGREGAR</a>-->

        {!! Form::open() !!}

            {!!Field::text('name',null,['label'=>'Nombre','placeholder'=>'Ingrese el Nombre']) !!}

            {!!Field::textarea('description',null,['label'=>'Description','placeholder'=>'Ingrese la Description']) !!}



        {!! Form::close() !!}


        </div>
    </div>
</div>
@endsection