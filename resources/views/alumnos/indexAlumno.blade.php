@extends('layouts.tema')

@section('contenido')

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Carrera</th>
      <th>Correo</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($alumnos as $alumno)
    <tr>
      <td>1</td>
      <td>{{ $alumno->nombre }}</td>
      <td>{{ $alumno->apellido }}</td>
      <td>{{ $alumno->carrera }}</td>
      <td>{{ $alumno->correo }}</td>
    </tr>
    @endforeach

    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

@endsection
