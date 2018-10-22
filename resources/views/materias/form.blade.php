@extends('layouts.tema')

@section('contenido')

<div class="row">
    <div class="col-lg-12">

        @if ( $errors->any() )
            <div class="alert alert-danger">
                <ul>
                @foreach ( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        
        <div class="tile">
            <div class="tile-body">
                
                @if( isset($Materia) )
                <!-- La clase Form requiere instalar laravelcollective por medio de un comando  -->
                <!-- en composer: composer require "laravelcollective/html":"^5.4.0"            -->
                <!-- Tambien se especifica que debe agregarse la siguiente line dentro del array-->
                <!-- de 'providers' dentro de config/app.php :                                  -->
                <!-- Collective\Html\HtmlServiceProvider::class,                                -->
                <!-- la linea incluye una coma al final                                         -->

                <!-- el metodo form se abre con las llaves {--!! !!--} para especificar que se      -->
                <!-- cargaran caracteres html sin formato.                                      -->

                <!-- El metodo Form::open() abre un formulario con campos vacios                -->
                <!-- {--!! Form::open(['route' => 'route.name']) !!--} -->

                <!-- El metodo Form::model() abre un formulario y lo precarga con los datos de  -->
                <!-- un modelo ya definido, empatando los atributos del modelo con los nombres  -->
                <!-- de las etiquetas de formulario.                                            -->
                {!! Form::model($Materia, ['route' => ['Materias.update', $Materia->id], 'method' => 'PATCH']) !!}

                <!-- <form action="{{ route('alumno.update', $alumno->id) }}" method="POST"></form> -->
                @else
                {!! Form::open( ['route' => 'Materias.store'] ) !!}
                <!-- <form action="{{ route('alumno.store') }}" method="POST"></form> -->
                <!-- <input type="hidden" name="_method" value="PATCH"> -->
                @endif
                <!--  <form action="{{ action('AlumnoController@store') }}" method="POST">-->
                {{-- csrf_field() --}}

                <label for="materia">Nombre de la materia:</label>
                <!-- <input class="form-control" type="text" name="nombre" value="{{ isset( $alumno ) ? $alumno->nombre : '' }}"> -->
                {!! Form::text('materia', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la materia']); !!}

                <label for="seccion">Seccion:</label>
                <!--    <input class="form-control" type="text" name="codigo">-->
                {!! Form::text('seccion', null, ['class' => 'form-control', 'placeholder' => 'seccion de la materia']); !!}

                <label for="crn">CRN:</label>
                <!--    <input class="form-control" type="text" name="carrera">-->
                {!! Form::text('crn', null, ['class' => 'form-control', 'placeholder' => 'CRN']); !!}
                
                <label for="salon">Salon:</label>
                <!--    <input class="form-control" type="text" name="carrera">-->
                {!! Form::text('salon', null, ['class' => 'form-control', 'placeholder' => 'Saslon']); !!}
                
                <input class="form-control" type="submit" value="submit">
                <!--  </form>-->
                {!! Form::close() !!}
            </div> <!-- tile-body -->
        </div> <!-- tile -->
    </div> <!-- col-lg-12 -->
</div> <!-- row -->


@endsection