<?php echo Form::open(['route' => ['acolhidas.destroy', $id], 'method' => 'delete']); ?>

<div class='btn-group'>
    <a href="<?php echo e(route('acolhidas.show', $id)); ?>" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="<?php echo e(route('acolhidas.edit', $id)); ?>" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Você tem certeza que deseja excluir?')"
    ]); ?>

</div>
<?php echo Form::close(); ?>