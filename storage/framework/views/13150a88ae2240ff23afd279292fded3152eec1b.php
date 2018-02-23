

<?php $__env->startSection('content'); ?>
 	<section class="content-header">
        <h1 class="pull-left">Selecione a Convivência para Emissão de Relatório de Acolhimento</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('acolhidas.create'); ?>">Adicionar Novo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <?php echo Form::model(null, ['route' => ['relatorio_acolhidas'], 'method' => 'post']); ?>


                <?php echo e(Form::hidden('is_ativo', 0)); ?>

                <?php echo Form::close(); ?>

                <?php echo $__env->make('acolhidas.relatorio_acolhidastable', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>