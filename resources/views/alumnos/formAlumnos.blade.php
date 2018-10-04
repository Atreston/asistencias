@extends('layouts.tema')

@section('contenido')


<div class="col-lg-12">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    @if( isset($alumno) )
        <!-- {!! Form::open(['route' => 'route.name']) !!} -->
        {!! Form::model($alumno, ['route' => ['alumno.update', $alumno->id], 'method' => 'PATCH']) !!}
        <!-- <form action="{{ route('alumno.update', $alumno->id) }}" method="POST"></form> -->
    @else
        {!! Form::open( ['route' => 'alumno.store'] ) !!}
        <!-- <form action="{{ route('alumno.store') }}" method="POST"></form> -->
        <!-- <input type="hidden" name="_method" value="PATCH"> -->
    @endif
    <!--  <form action="{{ action('AlumnoController@store') }}" method="POST">-->
    {{-- csrf_field() --}}
    
    <label for="alumno">Nombre completo:</label>
    <!-- <input class="form-control" type="text" name="nombre" value="{{ isset( $alumno ) ? $alumno->nombre : '' }}"> -->
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del alumno']); !!}

    <label for="codigo">Codigo:</label>
    <!--    <input class="form-control" type="text" name="codigo">-->
    {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Codigo del alumno']); !!}
    
    <label for="">Carrera:</label>
    <!--    <input class="form-control" type="text" name="carrera">-->
    {!! Form::text('carrera', null, ['class' => 'form-control', 'placeholder' => 'Carrera']); !!}
    
    <input class="form-control" type="submit" value="submit">
    <!--  </form>-->
    {!! Form::close() !!}
</div>



<!-- =========== Lo siguiente forma parte de un template de ejemplo =============
<div class="col-lg-6">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleSelect1">Example select</label>
            <select class="form-control" id="exampleSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleSelect2">Example multiple select</label>
            <select class="form-control" id="exampleSelect2" multiple="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input class="form-control-file" id="exampleInputFile" type="file" aria-describedby="fileHelp">
            <small class="form-text text-muted" id="fileHelp">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <fieldset class="form-group">
            <legend>Radio buttons</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" id="optionsRadios1" type="radio" name="optionsRadios" value="option1" checked="">Option one is this and that—be sure to include why it's great
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" id="optionsRadios2" type="radio" name="optionsRadios" value="option2">Option two can be something else and selecting it will deselect option one
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input class="form-check-input" id="optionsRadios3" type="radio" name="optionsRadios" value="option3" disabled="">Option three is disabled
                </label>
            </div>
        </fieldset>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Check me out
            </label>
        </div>
    </form>
</div>
-->


@endsection
