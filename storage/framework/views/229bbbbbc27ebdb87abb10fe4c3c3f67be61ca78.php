<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Editar Tipos de Carisma
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
            <?php echo Form::model($tipoCarisma, ['route' => ['tipoCarismas.update', $tipoCarisma->id], 'method' => 'patch']); ?>


            <?php echo $__env->make('tipo_carismas.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>