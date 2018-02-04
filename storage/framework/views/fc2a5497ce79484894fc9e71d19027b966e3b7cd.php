
<table class="table table-responsive" id="membros-table">
    <thead>
        <th></th>
        <th>Nome</th>
        <th>Equipe</th>
        <th>Cidade</th>
        <th colspan="3">Ações</th>
    </thead>
    <tbody>

    <?php $__currentLoopData = $membros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo (($membros->currentPage() - 1 ) * $membros->perPage() ) + $loop->iteration; ?></td>
            <td><?php echo $membro->no_usuario; ?></td>
            <td><?php echo $equipe->where('id', $membro->equipe_id)->pluck('no_equipe')->first(); ?></td>
            <td><?php echo $membro->no_cidade; ?></td>
            <td>
                <?php echo Form::open(['route' => ['membros.destroy', $membro->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <!--
                    <a href="<?php echo route('membros.show', [$membro->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    -->
                    <a href="<?php echo route('membros.edit', [$membro->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i> Excluir', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir este membro da sua Equipe?!')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
