<table class="table table-responsive" id="acolhidas-table">
    <thead>
        <th>Data Chegada</th>
        <th>Hora Chegada</th>
        <th>Número do vôo</th>
        <th>Data de Saída</th>
        <th>Hora saída</th>
        <th>Número do vôo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $acolhidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acolhida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $acolhida->dt_chegada; ?></td>
            <td><?php echo $acolhida->nu_hora_chegada; ?></td>
            <td><?php echo $acolhida->nu_voo_chegada; ?></td>
            <td><?php echo $acolhida->dt_saida; ?></td>
            <td><?php echo $acolhida->nu_hora_saida; ?></td>
            <td><?php echo $acolhida->nu_voo_saida; ?></td>
            <td>
            
                <?php echo Form::open(['route' => ['acolhidas.destroy', $acolhida->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <!--<a href="<?php echo route('acolhidas.show', [$acolhida->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <a href="<?php echo route('acolhidas.edit', [$acolhida->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i> Excluir', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
