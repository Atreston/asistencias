@extends('layouts.tema')

@section('contenido')

@if( isset( $alumno ))

    <table class="table table-striped"> 
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Codigo</th> 
                <th>Nombre</th>
                <th>Carrera</th> 
            </tr> 
        </thead> 

        <tbody> 

            <tr> 
                <td>{{ $alumno->id }}</td> 
                <td>{{ $alumno->codigo }}</td>
                <td>{{ $alumno->nombre }}</td> 
                <td>{{ $alumno->carrera }}</td> 
            </tr> 

        </tbody> 
    </table>

    <!-- colocar enlace de editar alumno con get -->

    <!-- <a class="btn btn-warning" href="{{--' route('materia.edit', $materia->id) --}}"> Editar</a>-->

    <a class="btn btn-warning" href="{{ route('alumno.edit', $alumno) }}"> Editar</a>

    <a class="btn btn-warning" href="{{ route('alumno.destroy', $alumno) }}">Borrar</a>

    <!-- Colocar boton de eliminar -->

@else

    No existe el alumno

@endif



@endsection