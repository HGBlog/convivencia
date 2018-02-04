<table class="table table-responsive" id="convivencias-table">
    <thead>
        <th>Habilitada</th>
        <th>Nome</th>
        <th>Local</th>
        <th>Início</th>
        <th>Fim</th>
        <th>Fim Inscrições</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $convivencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $convivencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>

                    <?php if(!$convivencia->is_ativo): ?>
                        <font color="red"><b>NÃO</b></font>
                    <?php else: ?>
                        <font color="green"><b>SIM</b></font>
                    <?php endif; ?>



</td>
            <td><?php echo $convivencia->no_nome; ?></td>
            <td><?php echo $local->where('id', $convivencia->local_convivencia_id)->pluck('no_local')->first(); ?></td>
            <td><?php echo Carbon\Carbon::parse($convivencia->dt_inicio)->format('d/m/Y'); ?></td>
            <td><?php echo Carbon\Carbon::parse($convivencia->dt_fim)->format('d/m/Y'); ?></td>
            <td><?php echo Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('d/m/Y'); ?></td>
            <td>
                <?php echo Form::open(['route' => ['convivencias.destroy', $convivencia->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('convivencias.edit', [$convivencia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i> Excluir', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
