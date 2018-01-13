<table class="table table-responsive" id="tipoQuartos-table">
    <thead>
        <th>Tipo de Quarto</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $tipoQuartos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoQuarto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $tipoQuarto->no_quarto; ?></td>
            <td>
                <?php echo Form::open(['route' => ['tipoQuartos.destroy', $tipoQuarto->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('tipoQuartos.show', [$tipoQuarto->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('tipoQuartos.edit', [$tipoQuarto->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
