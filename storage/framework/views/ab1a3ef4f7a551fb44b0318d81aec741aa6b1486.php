<?php $__env->startSection('contenido'); ?>

<?php if( isset( $alumno )): ?>

<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-striped"> 
                    <thead> 
                        <tr> 
                        <th>ID</th> 
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
                
                <a class="btn btn-warning" href="<?php echo e(route('alumno.edit', $alumno)); ?>">Editar</a>
                <a class="btn btn-warning" href="<?php echo e(route('alumno.destroy', $alumno)); ?>">Borrar</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                
                <?php echo Form::open(['route' => ['alumno.materia.store', $alumno] ]); ?>

                <?php echo Form::label('materias', 'Materias'); ?>

    
                <select name="materias" class="form-control">
                <?php $__currentLoopData = $materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($materia->id); ?>"><?php echo e($materia->materia); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <!--<?php $__currentLoopData = $materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table class="table table-striped"> 
                    <thead> 
                        <tr> 
                        <th>ID</th> 
                        <th>user ID</th> 
                        <th>Nombre</th>
                        <th>seccion</th> 
                        <th>CRN</th>
                        <th>salon</th>
                        </tr> 
                    </thead> 

                    <tbody> 
                        <tr> 
                        <td><?php echo e($materia->id); ?></td> 
                        <td><?php echo e($materia->user_id); ?></td>
                        <td><?php echo e($materia->materia); ?></td> 
                        <td><?php echo e($materia->seccion); ?></td> 
                        <td><?php echo e($materia->crn); ?></td>
                        <td><?php echo e($materia->salon); ?></td> 
                        </tr> 
                    </tbody> 
                </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                
                <?php echo Form::submit('Aceptar', ['class' => 'btn btn-sm btn-succed']); ?>

                <?php echo Form::close(); ?>

                
                <ul>
                    <?php $__currentLoopData = $alumno->materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>                       
                        <?php echo e($materia->materia); ?>

                        <!--
                        <form name="delete" action="<?php echo e(route('alumno.materia.destroy', [$alumno->id, $materia->id] )); ?>">
                            <button class="btn btn-warning" name="delete" form="delete" value="Borrar">Borrar</button>
                        </form>
                        -->
                        
                        <?php echo Form::open( ['route' => ['alumno.materia.destroy', $alumno, $materia], 'method' => 'delete' ] ); ?>

                        <!-- <?php echo Form::hidden('_method', 'DELETE'); ?> -->
                        <?php echo Form::submit('Borrar'); ?>

                        <?php echo Form::close(); ?>

                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div> <!-- tile-body -->
        </div> <!-- tile -->
    </div> <!-- col-md-6 -->

</div>

<?php else: ?>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <p>No se encontro el alumno</p>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tema', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>