@extends('layouts.tema')

@section('contenido')

<div class="row">
    <div class="col-md-12">
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
                        @foreach($materias as $materia) 
                        <tr>
                            <td>{{ $materia->id}}</td>
                            <td>{{ $materia->user_id }}</td> 
                            <td>{{ $materia->materia }}</td>
                            <td>{{ $materia->seccion }}</td> 
                            <td>{{ $materia->crn }}</td>
                            <!--<td>{{-- $alumno->user --}}</td>-->
                            <td>{{ $materia->salon }}</td>
                            <td>
                                
                            </td>
                        </tr> 
                        @endforeach  
                    </tbody> 
                </table>
                
            </div>
        </div>
    </div>
</div>

@endsection