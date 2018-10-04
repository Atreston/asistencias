<?php $__env->startSection('contenido'); ?>

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

<!-- <a class="btn btn-warning" href="<?php echo e(route('materia.edit', $materia->id)); ?>"> Editar</a>
-->

<a class="btn btn-warning" href="<?php echo e(route('alumnos.formEditAlumno', $alumno->id)); ?>"> Editar</a>

<a class="btn btn-warning" href="<?php echo e(route('materia.edit', $materia->id)); ?>"> Editar</a>

<!-- Colocar boton de eliminar -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tema', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>