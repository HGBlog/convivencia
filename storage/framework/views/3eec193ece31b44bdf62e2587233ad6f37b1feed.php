<table class="table table-responsive" id="acolhidaExtras-table">
    <thead>
        <th>Nome Acolhida Extra</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $acolhidaExtras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acolhidaExtra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $acolhidaExtra->no_acolhida_extra; ?></td>
            <td>
                <?php echo Form::open(['route' => ['acolhidaExtras.destroy', $acolhidaExtra->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('acolhidaExtras.edit', [$acolhidaExtra->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i> Excluir', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
