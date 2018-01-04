<table class="table table-responsive" id="perfilUsuarios-table">
    <thead>
        <th>No Usuario</th>
        <th>No Pais</th>
        <th>No Email</th>
        <th>No Sexo</th>
        <th>Co Telefone Pais</th>
        <th>Nu Telefone</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $perfilUsuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perfilUsuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $perfilUsuario->no_usuario; ?></td>
            <td><?php echo $perfilUsuario->no_pais; ?></td>
            <td><?php echo $perfilUsuario->no_email; ?></td>
            <td><?php echo $perfilUsuario->no_sexo; ?></td>
            <td><?php echo $perfilUsuario->co_telefone_pais; ?></td>
            <td><?php echo $perfilUsuario->nu_telefone; ?></td>
            <td>
                <?php echo Form::open(['route' => ['perfilUsuarios.destroy', $perfilUsuario->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('perfilUsuarios.show', [$perfilUsuario->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('perfilUsuarios.edit', [$perfilUsuario->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
