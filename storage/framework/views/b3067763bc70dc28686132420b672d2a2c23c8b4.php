<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Alterar dados da Convivência
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
            <?php echo Form::model($convivencia, ['route' => ['convivencias.update', $convivencia->id], 'method' => 'patch']); ?>


            <?php echo e(Form::hidden('is_ativo', 0)); ?>

            <?php echo $__env->make('convivencias.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>