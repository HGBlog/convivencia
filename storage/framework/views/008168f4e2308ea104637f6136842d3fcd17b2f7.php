<table class="table table-responsive" id="tipoTranslados-table">
    <thead>
        <th>No Translado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $tipoTranslados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoTranslado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $tipoTranslado->no_translado; ?></td>
            <td>
                <?php echo Form::open(['route' => ['tipoTranslados.destroy', $tipoTranslado->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('tipoTranslados.show', [$tipoTranslado->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('tipoTranslados.edit', [$tipoTranslado->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
