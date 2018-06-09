<table class="table table-responsive" id="etapas-table">
    <thead>
        <th>No Etapa</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $etapas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etapa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $etapa->no_etapa; ?></td>
            <td>
                <?php echo Form::open(['route' => ['etapas.destroy', $etapa->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('etapas.edit', [$etapa->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
