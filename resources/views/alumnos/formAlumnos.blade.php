@extends('layouts.tema')

@section('contenido')

<form action="/alumno/store" method="POST">
  <label for="alumno">Alumno:</label>
  <input type="text" name="alumno">
  
  <input type="submit" value="submit">
</form>
  
@endsection