<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Editar Tipo de Quarto</h1>
            </div>
        </div>

        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="row">
            <?php echo Form::model($tipoQuarto, ['route' => ['tipoQuartos.update', $tipoQuarto->id], 'method' => 'patch']); ?>


            <?php echo $__env->make('tipo_quartos.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::close(); ?>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>