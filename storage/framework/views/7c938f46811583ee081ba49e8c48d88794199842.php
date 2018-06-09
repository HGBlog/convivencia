<?php echo Form::open(['route' => ['membros.destroy', $id], 'method' => 'delete']); ?>

<div class='btn-group'>
    <!--
    <a href="<?php echo e(route('membros.show', $id)); ?>" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
-->
    <a href="<?php echo e(route('membros.edit_macroregiao', $id)); ?>" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"> Editar</i>
    </a>
    
</div>
<?php echo Form::close(); ?>

