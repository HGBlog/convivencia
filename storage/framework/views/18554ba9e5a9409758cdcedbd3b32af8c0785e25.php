<table class="table table-responsive" id="usuarios-table">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Macro-região</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $usuario->name; ?></td>
            <td><?php echo $usuario->email; ?></td>
            <td><?php echo $macroregiao->where('id', $usuario->mregiao_id)->pluck('no_macro_regiao')->first(); ?></td>
            <td>
                <?php echo Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('usuarios.edit', [$usuario->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit">Editar</i></a>
                    <!--<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir este usuario?')"]); ?> -->
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
