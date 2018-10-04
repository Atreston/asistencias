<?php $__env->startSection('contenido'); ?>

<?php if( isset( $alumno )): ?>

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

            <tr> 
                <td><?php echo e($alumno->id); ?></td> 
                <td><?php echo e($alumno->codigo); ?></td>
                <td><?php echo e($alumno->nombre); ?></td> 
                <td><?php echo e($alumno->carrera); ?></td> 
            </tr> 

        </tbody> 
    </table>

    <!-- colocar enlace de editar alumno con get -->

    <!-- <a class="btn btn-warning" href=""> Editar</a>-->

    <a class="btn btn-warning" href="<?php echo e(route('alumno.edit', $alumno)); ?>"> Editar</a>

    <a class="btn btn-warning" href="<?php echo e(route('alumno.destroy', $alumno)); ?>">Borrar</a>

    <!-- Colocar boton de eliminar -->

<?php else: ?>

    No existe el alumno

<?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tema', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>