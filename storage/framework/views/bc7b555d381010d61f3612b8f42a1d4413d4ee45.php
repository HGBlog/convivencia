<table class="table table-responsive" id="convivenciaMembros-table">
<thead>
        <th>Membro</th>
        <th>Vai à Convivência?</th>
        <th>Dados Acolhimento</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $casados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $casado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
               <tr>
                <td><?php echo $casado->no_usuario; ?> e <?php echo $casado->no_conjuge; ?></td>
                <td> 
                    <?php if(!$acolhida
                            ->where('convivencia_id', $convivencia->id)
                            ->where('membro_id', $casado->id)
                            ->pluck('is_ativo')
                            ->first()
                        ): ?>
                        <?php if(!$acolhida
                            ->where('convivencia_id', $convivencia->id)
                            ->where('membro_id', $casado->id)
                            ->pluck('is_conjuge')
                            ->first()
                        ): ?>
                        <font color="red"><b>NENHUM DOS DOIS</b></font>
                        <?php else: ?>
                        <font color="green"><b>APENAS O CONJUGE</b></font>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($acolhida
                            ->where('convivencia_id', $convivencia->id)
                            ->where('membro_id', $casado->id)
                            ->pluck('is_conjuge')
                            ->first()
                        ): ?>
                        <font color="green"><b>SIM, O CASAL</b></font>
                        <?php else: ?>
                        <font color="green"><b>SOMENTE MARIDO</b></font>
                        <?php endif; ?>
                    <?php endif; ?>

                    
                </td>
                <td>
                    <a href="<?php echo route('acolhidas.edit', ['convivencia/'.$convivencia->id.'/membro/'.$casado->id ]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-home"></i> Acolhimento</a>
                </td>
            </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  

    
    <?php $__currentLoopData = $membros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $membro->no_usuario; ?></td>
                <td> 
                    <?php if(!$acolhida
                            ->where('convivencia_id', $convivencia->id)
                            ->where('membro_id', $membro->id)
                            ->pluck('is_ativo')
                            ->first()
                        ): ?>
                        <font color="red"><b>NÃO</b></font>
                    <?php else: ?>
                        <font color="green"><b>SIM</b></font>
                    <?php endif; ?>

                    
                </td>
                <td>
                    <a href="<?php echo route('acolhidas.edit', ['convivencia/'.$convivencia->id.'/membro/'.$membro->id ]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-home"></i> Acolhimento</a>
                </td>
            </tr>        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>