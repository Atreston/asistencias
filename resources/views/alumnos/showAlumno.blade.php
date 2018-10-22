@extends('layouts.tema')

@section('contenido')

@if( isset( $alumno ))

<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-striped"> 
                    <thead> 
                        <tr> 
                        <th>ID</th> 
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
                
                <a class="btn btn-warning" href="{{ route('alumno.edit', $alumno) }}">Editar</a>
                <a class="btn btn-warning" href="{{ route('alumno.destroy', $alumno) }}">Borrar</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                
                {!! Form::open(['route' => ['alumno.materia.store', $alumno] ]) !!}
                {!! Form::label('materias', 'Materias') !!}
    
                <select name="materias" class="form-control">
                @foreach( $materias as $materia )
                    <option value="{{ $materia->id }}">{{ $materia->materia }}</option>
                @endforeach
                </select>
                <!--@foreach( $materias as $materia )
                <table class="table table-striped"> 
                    <thead> 
                        <tr> 
                        <th>ID</th> 
                        <th>user ID</th> 
                        <th>Nombre</th>
                        <th>seccion</th> 
                        <th>CRN</th>
                        <th>salon</th>
                        </tr> 
                    </thead> 

                    <tbody> 
                        <tr> 
                        <td>{{ $materia->id }}</td> 
                        <td>{{ $materia->user_id }}</td>
                        <td>{{ $materia->materia }}</td> 
                        <td>{{ $materia->seccion }}</td> 
                        <td>{{ $materia->crn }}</td>
                        <td>{{ $materia->salon }}</td> 
                        </tr> 
                    </tbody> 
                </table>
                @endforeach-->
                
                {!! Form::submit('Aceptar', ['class' => 'btn btn-sm btn-succed']) !!}
                {!! Form::close() !!}
                
                <ul>
                    @foreach( $alumno->materias as $materia )
                    <li>                       
                        {{ $materia->materia }}
                        <form name="delete" action="{{ route('alumno.materia.destroy', [$alumno->id, $materia->id] ) }}">
                            <button class="btn btn-warning" name="delete" form="delete" value="Borrar">Borrar</button>
                        </form>
                    </li>@endforeach
                </ul>
            </div> <!-- tile-body -->
        </div> <!-- tile -->
    </div> <!-- col-md-6 -->

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

@endsection