<?php $__env->startSection('content'); ?>
        <h1 class="pull-left">Tipos de Quartos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="<?php echo route('tipoQuartos.create'); ?>">Adicionar novo</a>

        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>

        <?php echo $__env->make('tipo_quartos.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>