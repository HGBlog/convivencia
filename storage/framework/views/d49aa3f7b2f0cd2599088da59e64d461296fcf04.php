<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Dados de Acolhimento
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                    <?php echo Form::model($acolhida, [
                    'route' => ['acolhidas.update', 'convivencia/'.$convivencia_id.'/membro/'.$membro_id], 
                    'method' => 'patch'
                    ]); ?>


                    <?php echo e(Form::hidden('convivencia_id', $convivencia_id)); ?>

                    <?php echo e(Form::hidden('membro_id', $membro_id)); ?>

                    <?php echo e(Form::hidden('is_ativo', 0)); ?>

                                    
                    <?php echo $__env->make('acolhidas.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>