@extends('layouts.tema')

@section('contenido')

<form action="/alumno/update/{{$alumno}}" method="POST">
  <label for="alumno">Alumno:</label>
  <input type="text" name="alumno" value="{{$alumno}}">
  
  <input type="submit" value="submit">
</form>
  
@endsection