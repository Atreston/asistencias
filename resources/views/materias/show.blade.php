@extends('layouts.tema')

@section('contenido')

@if( isset( $materia ))

<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-striped"> 
                    <thead> 
                        <tr> 
                            <th>id</th> 
                            <th>ID de usuario</th> 
                            <th>Nombre</th>
                            <th>seccion</th> 
                            <th>crn</th> 
                            <th>salon</th>
                            <th>opciones</th>
                        </tr> 
                    </thead> 

                    <tbody> 
                        <tr>
                            <td>{{ $materia->id}}</td>
                            <td>{{ $materia->user_id }}</td> 
                            <td>{{ $materia->materia }}</td>
                            <td>{{ $materia->seccion }}</td> 
                            <td>{{ $materia->crn }}</td>
                            <!--<td>{{-- $alumno->user --}}</td>-->
                            <td>{{ $materia->salon }}</td>
                            <td>
                                <a class="btn" href="{{-- route('alumno.edit', $alumno) --}}">Editar</a>
                                <a class="btn" href="{{-- route('alumno.destroy', $alumno) --}}">Borrar</a>
                            </td>
                        </tr> 
                    </tbody> 
                </table>
                
                <a class="btn btn-warning" href="{{-- route('alumno.edit', $alumno) --}}">Editar</a>
                <a class="btn btn-warning" href="{{-- route('alumno.destroy', $alumno) --}}">Borrar</a>
            </div>
        </div>
    </div>
</div>

@else

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <p>No se encontro el alumno</p>
            </div>
        </div>
    </div>
</div>

@endif

    <!-- colocar enlace de editar alumno con get -->

<!-- <a class="btn btn-warning" href="{{--' route('materia.edit', $materia->id) --}}"> Editar</a>-->



    <!-- Colocar boton de eliminar -->





@endsection