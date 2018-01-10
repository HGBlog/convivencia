

<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Selecione a Convivência</h1>
            </div>
        </div>

        <?php echo $__env->make('core-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
        <div class="row">

            <?php echo Form::model(null, ['route' => ['seleciona_convivencia', 'convivencia_id'], 'method' => 'post']); ?>

            
            <?php echo e(Form::hidden('is_ativo', 0)); ?>


            <?php echo $__env->make('convivencias.lista_ativasfields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        

            <?php echo Form::close(); ?>

        </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>