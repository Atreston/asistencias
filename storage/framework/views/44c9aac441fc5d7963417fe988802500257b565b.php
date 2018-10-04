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
		<?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
		<tr> 
			<td>1</td> 
			<td><?php echo e($alumno->codigo); ?></td>
			<td><?php echo e($alumno->nombre); ?></td> 
			<td><?php echo e($alumno->carrera); ?></td> 
		</tr> 
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
	</tbody> 
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tema', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>