<?php echo Form::open(['route' => ['relatorioAcolhidas.destroy', $id], 'method' => 'delete']); ?>

<div class='btn-group'>
    <a href="<?php echo e(route('relatorioAcolhidas.show', $id)); ?>" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="<?php echo e(route('relatorioAcolhidas.edit', $id)); ?>" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]); ?>

</div>
<?php echo Form::close(); ?>

