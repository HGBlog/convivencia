<table class="table table-responsive" id="tipoEquipes-table">
    <thead>
        <th>No Equipe</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $tipoEquipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoEquipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $tipoEquipe->no_equipe; ?></td>
            <td>
                <?php echo Form::open(['route' => ['tipoEquipes.destroy', $tipoEquipe->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('tipoEquipes.show', [$tipoEquipe->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('tipoEquipes.edit', [$tipoEquipe->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
