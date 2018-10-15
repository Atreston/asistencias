@extends('layouts.tema')

@section('contenido')

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

@endsection
