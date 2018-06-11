<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Selecione a Convivência para Inscrição</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

            <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="clearfix"></div>
                <div class="box box-primary">
                    <div class="box-body">
                        <?php echo Form::model(null, ['route' => ['seleciona_convivencia', 'convivencia_id'], 'method' => 'post']); ?>

                        
                        <?php echo e(Form::hidden('is_ativo', 0)); ?>


                        <?php echo $__env->make('convivencias.lista_ativasfields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            <div class="text-center">
        
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>