<?php $__env->startSection('content'); ?>
        <h1 class="pull-left">Acolhidas</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="<?php echo route('acolhidas.create'); ?>">Add New</a>

        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>

        <?php echo $__env->make('acolhidas.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>