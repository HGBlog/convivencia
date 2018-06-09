<table class="table table-responsive" id="localConvivencias-table">
    <thead>
        <th>No Local</th>
        <th>Nu Telefone</th>
        <th>No Cidade</th>
        <th>No Endereco</th>
        <th>No Observacoes</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $localConvivencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localConvivencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $localConvivencia->no_local; ?></td>
            <td><?php echo $localConvivencia->nu_telefone; ?></td>
            <td><?php echo $localConvivencia->no_cidade; ?></td>
            <td><?php echo $localConvivencia->no_endereco; ?></td>
            <td><?php echo $localConvivencia->no_observacoes; ?></td>
            <td>
                <?php echo Form::open(['route' => ['localConvivencias.destroy', $localConvivencia->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('localConvivencias.edit', [$localConvivencia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
