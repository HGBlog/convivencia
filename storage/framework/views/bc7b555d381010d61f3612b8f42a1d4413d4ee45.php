<table class="table table-responsive" id="convivenciaMembros-table">
<thead>
        <th>Membro</th>
        <!--
        <th>Pais</th>
        <th>Email</th>
        <th>Sexo</th>
        <th>Cod. Pais</th>
        <th>Telefone</th>
        <th>Diocese</th>
        -->
        <th>Cidade</th>
        <!--
        <th>Paroquia</th>
        <th>Comunidade</th>
        <th>Início Caminho</th>
        -->
        <th>Vai à Convivência?</th>
        <th>Dados Acolhimento</th>
    </thead>
    <tbody>
     
   
   

    
    <?php $__currentLoopData = $membros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $membro->no_usuario; ?></td>
                <td><?php echo $membro->no_cidade; ?></td>
                <td> 
                    <?php if(!$acolhida
                            ->where('convivencia_id', $convivencia->id)
                            ->where('membro_id', $membro->id)
                            ->pluck('is_ativo')
                            ->first()
                        ): ?>
                        <font color="red"><b>NÃO</b></font>
                    <?php else: ?>
                        <font color="blue"><b>SIM</b></font>
                    <?php endif; ?>

                    
                </td>
                <td>
                    <a href="<?php echo route('acolhidas.edit', ['convivencia/'.$convivencia->id.'/membro/'.$membro->id ]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </td>
            </tr>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>