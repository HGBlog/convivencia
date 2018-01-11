<table class="table table-responsive" id="membros-table">
    <thead>
        <th>Nome</th>
        <th>Pais</th>
        <th>Email</th>
        <th>Sexo</th>
        <th>Cod. Pais</th>
        <th>Telefone</th>
        <th>Diocese</th>
        <th>Cidade</th>
        <!--
        <th>Paroquia</th>
        <th>Comunidade</th>
        <th>Início Caminho</th>
        -->
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $membros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $membro->no_usuario; ?></td>
            <td><?php echo $membro->no_pais; ?></td>
            <td><?php echo $membro->no_email; ?></td>
            <td><?php echo $membro->no_sexo; ?></td>
            <td><?php echo $membro->co_telefone_pais; ?></td>
            <td><?php echo $membro->nu_telefone; ?></td>
            <td><?php echo $membro->no_diocese; ?></td>
            <td><?php echo $membro->no_cidade; ?></td>
            <!--
            <td><?php echo $membro->no_paroquia; ?></td>
            <td><?php echo $membro->nu_comunidade; ?></td>
            <td><?php echo $membro->nu_ano_inicio_caminho; ?></td>
            -->
            <td>
                <?php echo Form::open(['route' => ['membros.destroy', $membro->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <!--
                    <a href="<?php echo route('membros.show', [$membro->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    -->
                    <a href="<?php echo route('membros.edit', [$membro->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir este membro da sua Equipe?!')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
