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
            <td><?php echo $convivencia->is_ativo; ?></td>
            <td><?php echo $convivencia->no_nome; ?></td>
            <td><?php echo $local->where('id', $convivencia->local_convivencia_id)->pluck('no_local')->first(); ?></td>
            <td><?php echo Carbon\Carbon::parse($convivencia->dt_inicio)->format('d/m/Y'); ?></td>
            <td><?php echo Carbon\Carbon::parse($convivencia->dt_fim)->format('d/m/Y'); ?></td>
            <td><?php echo Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('d/m/Y'); ?></td>
            <td>
                <?php echo Form::open(['route' => ['convivencias.destroy', $convivencia->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('convivencias.show', [$convivencia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('convivencias.edit', [$convivencia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
