<div class="simple-tab" >
  <ul>
    <li class="active">Dados da chegada</li>
    <li>Dados da saída</li>
    <li>Outras informações</li>
  </ul>
  <div class="form-group col-sm-7">
    <div class="active">
      <p>



        <?php echo Form::label('is_ativo', 'Vai para a convivência?'); ?>

        <?php echo Form::checkbox('is_ativo', true, $acolhida->is_ativo,  ['class' => 'form-control']); ?>


        <?php echo Form::label('dt_chegada', 'Data de chegada:'); ?>

        <?php echo Form::date('dt_chegada', Carbon\Carbon::parse($acolhida->dt_chegada)->format('Y-m-d'), ['class' => 'form-control', 'placeholder'=>'dd-mm-AAAA']); ?>


        <?php echo Form::label('nu_hora_chegada', 'Hora de chegada:'); ?>

        <?php echo Form::text('nu_hora_chegada', null, ['class' => 'form-control']); ?>


        <?php echo Form::label('nu_voo_chegada', 'Número vôo:'); ?>

        <?php echo Form::text('nu_voo_chegada', null, ['class' => 'form-control', 'placeholder'=>'Número do vôo se for o caso']); ?>


        <?php echo Form::label('no_local_chegada', 'Local de desembarque:'); ?>

        <?php echo Form::text('no_local_chegada', null, ['class' => 'form-control', 'placeholder'=>'Informar o Aeroporto, Rodoviária ou Local de desembarque']); ?>


      </p>        
    </div>
    <div id="saida">
      <p>

    <?php echo Form::label('dt_saida', 'Data de saída:'); ?>

    <?php echo Form::date('dt_saida', Carbon\Carbon::parse($acolhida->dt_saida)->format('Y-m-d'), ['class' => 'form-control','placeholder'=>'Formato dd-mm-AAAA']); ?>



    <?php echo Form::label('nu_hora_saida', 'Hora de saída:'); ?>

    <?php echo Form::text('nu_hora_saida', null, ['class' => 'form-control']); ?>


    <?php echo Form::label('nu_voo_saida', 'Número vôo:'); ?>

    <?php echo Form::text('nu_voo_saida', null, ['class' => 'form-control', 'placeholder'=>'Número do vôo se for o caso']); ?>


    <?php echo Form::label('no_local_saida', 'Local de embarque:'); ?>

    <?php echo Form::text('no_local_saida', null, ['class' => 'form-control', 'placeholder'=>'Informar o Aeroporto, Rodoviária ou Local de embarque']); ?>


      </p>        
    </div>
    <div id="outros">
      <p>

    <?php echo Form::label('tipo_translado_id', 'Translado:'); ?>

    <?php echo Form::select('tipo_translado_id', $translado, $acolhida->tipo_translado_id, ['id' => 'tipo_translado_id', 'class' => 'form-control', 'dropdown-menu']); ?>



    <?php echo Form::label('acolhida_extra_id', 'Acolhimento Extra'); ?>

    <?php echo Form::select('acolhida_extra_id', $acolhida_extra, $acolhida->pluck('acolhida_extra_id'), ['id' => 'acolhida_extra_id', 'class' => 'form-control', 'dropdown-menu']); ?>


    <?php echo Form::label('no_observacoes', 'Observações:'); ?>

    <?php echo Form::textarea('no_observacoes', null, ['class' => 'form-control', 'rows' => '5']); ?>


      </p>            
    </div>
  </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('membros.index'); ?>" class="btn btn-default">Cancel</a>
</div>
