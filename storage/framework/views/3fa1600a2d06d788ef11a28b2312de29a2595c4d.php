<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('convivencias.show_fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="form-group">
           <a href="<?php echo route('convivencias.index'); ?>" class="btn btn-default">Back</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>