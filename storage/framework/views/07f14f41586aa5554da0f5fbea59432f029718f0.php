<table class="table table-responsive" id="dadosCaminhos-table">
    <thead>
        <th>No Diocese</th>
        <th>No Cidade</th>
        <th>No Paroquia</th>
        <th>Nu Comunidade</th>
        <th>Nu Ano Inicio Caminho</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $dadosCaminhos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dadosCaminho): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $dadosCaminho->no_diocese; ?></td>
            <td><?php echo $dadosCaminho->no_cidade; ?></td>
            <td><?php echo $dadosCaminho->no_paroquia; ?></td>
            <td><?php echo $dadosCaminho->nu_comunidade; ?></td>
            <td><?php echo $dadosCaminho->nu_ano_inicio_caminho; ?></td>
            <td>
                <?php echo Form::open(['route' => ['dadosCaminhos.destroy', $dadosCaminho->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('dadosCaminhos.show', [$dadosCaminho->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('dadosCaminhos.edit', [$dadosCaminho->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
