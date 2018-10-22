@extends('layouts.tema')

@section('contenido')

@if( isset( $alumno ))

<div class="row">
    <div class="col-md-6">
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
    </div>

    <div class="col-md-6">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    {!! Form::open( ['route'=> ['alumno.materia.store', $alumno->id]] ) !!}
                    {!! Form::label('materia_id', 'Materias' ) !!}
                    <select name="materia_id">
                        -- @foreach( $materias as $materia )
                            <option value="{{ $materia->id }}">{{ $materia->materia }}</option>
                        -- @endforeach
                    </select>
                    {!! Form::submit('Aceptar') !!}
                    {!! Form::close() !!}
                </div>            
            </div>
            
        </div>
    </div>
    
    </div>
    <!-- colocar enlace de editar alumno con get -->

    <!-- <a class="btn btn-warning" href="{{--' route('materia.edit', $materia->id) --}}"> Editar</a>-->

    <a class="btn btn-warning" href="{{ route('alumno.edit', $alumno) }}"> Editar</a>

    <a class="btn btn-warning" href="{{ route('alumno.destroy', $alumno) }}">Borrar</a>

    <!-- Colocar boton de eliminar -->

@else

    No existe el alumno

@endif



@endsection