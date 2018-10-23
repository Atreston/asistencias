@extends('layouts.tema')

@section('contenido')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
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
                        @foreach($alumnos as $alumno) 
                        <tr>
                            <td>{{ $alumno->id }}</td> 
                            <td>{{ $alumno->codigo }}</td>
                            <td>{{ $alumno->nombre }}</td> 
                            <td>{{ $alumno->carrera }}</td>
                            <!--<td>{{ $alumno->user }}</td>-->
                            <td>{{ $alumno->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <!-- <a class="btn btn-warning" href="{{ route('alumno.edit', $alumno) }}">Editar</a> -->
                <!-- <a class="btn btn-warning" href="{{ route('alumno.destroy', $alumno) }}">Borrar</a> -->
            </div>
        </div>
    </div>
</div>

@endsection
