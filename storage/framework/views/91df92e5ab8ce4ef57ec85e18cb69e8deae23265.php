<?php $__env->startSection('contenido'); ?>

<div class="row">
    <div class="col-lg-12">

        <?php if( $errors->any() ): ?>
            <div class="alert alert-danger">
                <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <div class="tile">
            <div class="tile-body">
                
                <?php if( isset($alumno) ): ?>
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
                <?php echo Form::model($alumno, ['route' => ['alumno.update', $alumno->id], 'method' => 'PATCH']); ?>


                <!-- <form action="<?php echo e(route('alumno.update', $alumno->id)); ?>" method="POST"></form> -->
                <?php else: ?>
                <?php echo Form::open( ['route' => 'alumno.store'] ); ?>

                <!-- <form action="<?php echo e(route('alumno.store')); ?>" method="POST"></form> -->
                <!-- <input type="hidden" name="_method" value="PATCH"> -->
                <?php endif; ?>
                <!--  <form action="<?php echo e(action('AlumnoController@store')); ?>" method="POST">-->
                

                <label for="nombre">Nombre completo:</label>
                <!-- <input class="form-control" type="text" name="nombre" value="<?php echo e(isset( $alumno ) ? $alumno->nombre : ''); ?>"> -->
                <?php echo Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del alumno']);; ?>


                <label for="codigo">Codigo:</label>
                <!--    <input class="form-control" type="text" name="codigo">-->
                <?php echo Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Codigo del alumno']);; ?>


                <label for="carrera">Carrera:</label>
                <!--    <input class="form-control" type="text" name="carrera">-->
                <?php echo Form::text('carrera', null, ['class' => 'form-control', 'placeholder' => 'Carrera']);; ?>


                <input class="form-control" type="submit" value="submit">
                <!--  </form>-->
                <?php echo Form::close(); ?>

            </div> <!-- tile-body -->
        </div> <!-- tile -->
    </div> <!-- col-lg-12 -->
</div> <!-- row -->




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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tema', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>