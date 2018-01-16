
<div class="simple-tab" >
  <ul>
    <li class="active">Dados Pessoais</li>
    <li>Dados do Caminho</li>
    <li>Dados da missão</li>
    <li>Contatos</li>
  </ul>
  <div class="form-group col-sm-7">
    <div class="active">
      <p>
            <?php echo Form::label('no_usuario', 'Nome do membro:'); ?>

            <?php echo Form::text('no_usuario', null, ['class' => 'form-control', 'placeholder'=>'Nome completo']); ?>


            <?php echo Form::label('no_sexo', 'Sexo:'); ?>

            <?php echo Form::select('no_sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control']); ?>

        
            <?php echo Form::label('no_pais', 'País:'); ?>

            <?php echo Form::text('no_pais', null, ['class' => 'form-control', 'placeholder'=>'País']); ?>

      </p>        
    </div>
    <div id="caminho">
      <p>


            <?php echo Form::label('equipe_id', 'Equipe'); ?>

            <?php echo Form::select('equipe_id', $equipes, $membro->equipe_id, ['id' => 'equipe_id', 'class' => 'form-control', 'dropdown-menu']); ?>


                    <!-- No Diocese Field -->

            <?php echo Form::label('no_diocese', 'Diocese:'); ?>

            <?php echo Form::text('no_diocese', null, ['class' => 'form-control', 'placeholder'=>'Diocese']); ?>



        <!-- No Cidade Field -->

            <?php echo Form::label('no_cidade', 'Cidade:'); ?>

            <?php echo Form::text('no_cidade', null, ['class' => 'form-control', 'placeholder'=>'Cidade de origem']); ?>



        <!-- No Paroquia Field -->

            <?php echo Form::label('no_paroquia', 'Paróquia:'); ?>

            <?php echo Form::text('no_paroquia', null, ['class' => 'form-control', 'placeholder'=>'Paróquia de origem']); ?>



        <!-- Nu Comunidade Field -->

            <?php echo Form::label('nu_comunidade', 'Número Comunidade:'); ?>

            <?php echo Form::text('nu_comunidade', null, ['class' => 'form-control', 'maxlength' => '2']); ?>



        <!-- Etapa Caminho Field -->
        
            <?php echo Form::label('etapa_id', 'Etapa'); ?>

            <?php echo Form::select('etapa_id', $etapas, $membro->etapa_id, ['id' => 'etapa_id', 'class' => 'form-control', 'dropdown-menu']); ?>

      </p>               
    </div>
    <div id="missao">
      <p>

            <?php echo Form::label('tipo_carisma_id', 'Carisma:'); ?>

            <?php echo Form::select('tipo_carisma_id', $carismas, $membro->tipo_carisma_id, ['id' => 'tipo_carisma_id', 'class' => 'form-control', 'dropdown-menu']); ?>

      </p>   
    </div>
    <div id="contato">
      <p>

         <!-- No Email Field -->
        
            <?php echo Form::label('no_email', 'Email:'); ?>

            <?php echo Form::email('no_email', null, ['class' => 'form-control', 'placeholder'=>'Email válido']); ?>

        <!-- Co Telefone Pais Field -->

            <?php echo Form::label('co_telefone_pais', 'Código Telefone:'); ?>

            <?php echo Form::text('co_telefone_pais', null, ['class' => 'form-control', 'placeholder'=>'Código DDD', 'maxlength' => '3']); ?>



        <!-- Nu Telefone Field -->

            <?php echo Form::label('nu_telefone', 'Número Telefone:'); ?>

            <?php echo Form::number('nu_telefone', null, ['class' => 'form-control', 'placeholder'=>'Telefone - Apenas números', 'maxlength' => '10']); ?>



        


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
