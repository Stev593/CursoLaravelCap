@extends('layouts.app')
@section('content')

<div class="container">
index de categories 
    <div class="card">
        <div class="card-header">
        Curso Capacitación Laravel
        </div>
        <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">AGREGAR</a>
    <!--<a href="" class="btn btn-primary">AGREGAR</a>-->

            {!! Form::open(['method'=>'GET','route'=>'categories.index']) !!}
            {!!Form::text('filter',null,['class'=>'form-control','placeholder'=>'Buscar nombre de Categoría']) !!}
            {!! Form::close() !!}

        <hr/>
        <table class="table">
            <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>SLUG</th>
            <th>ACCIONES</th>
            </tr>
            @forelse($categories as $category)
            <tr>
                <td>{{ $category->id}}</td>
                <td>{{ $category->name}}</td>
                <td>{{ $category->slug}}</td>
                <td>

                {!!Form::open(['route'=>['categories.destroy',$category],'method'=>'DELETE','onsubmit'=>'return confirm("Estas seguro que quieres eliminar?")'
                     ])!!}

                <a class="btn btn-primary" href="{{route('categories.edit',$category)}}">EDITAR</a>

                {!!Form::submit('ELIMINAR',['class'=>'btn btn-danger']) !!}

                {!!Form::close() !!} 

                </td>
             </tr>
            @empty
            <tr> <td colspan="4">NO HAY REGISTROS</td></tr>
            @endforelse
        </table>
        {!! $categories->render() !!}
      
        </div>
    </div>
</div>


@endsection

