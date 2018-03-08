
<div class="simple-tab" >
  <ul>
    <li class="active">Dados Pessoais</li>
    <li>Dados da Missão</li>
    <li>Dados do Caminho</li>
  </ul>
  <div class="form-group col-sm-7">
    <div class="active">
      <p>
            <div class="form-group col-sm-6">
              <?php echo Form::label('no_usuario', 'Nome do membro:'); ?>

              <?php echo Form::text('no_usuario', null, ['class' => 'form-control', 'placeholder'=>'Nome completo']); ?>

            </div>
            <div class="form-group col-sm-6">
              <?php echo Form::label('no_sexo', 'Sexo:'); ?>

              <?php echo Form::select('no_sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control', 'placeholder'=>'Selecione']); ?>

            </div>            
            <div class="form-group col-sm-6">
              <?php echo Form::label('no_estado_civil', 'Estado Civil:'); ?>

              <?php echo Form::select('no_estado_civil', ['Solteiro' => 'Solteiro', 'Casado' => 'Casado','Viúvo' => 'Viúvo', 'Separado' => 'Separado'], null, ['class' => 'form-control', 'placeholder'=>'Selecione']); ?>

            </div>

                <div class="form-group col-sm-12">
                  <?php echo Form::label('no_conjuge', ' '); ?>

                  <?php echo Form::text('no_conjuge', null, ['class' => 'form-control', 'placeholder'=>'Nome completo do Cônjuge']); ?>

                </div>

        <!-- Estado Field -->
            <div class="form-group col-sm-6">
            <?php echo Form::label('estado_id', 'Estado'); ?>

            <?php echo Form::select('estado_id', $estados, $membro->estado_id, ['id' => 'estado_id', 'class' => 'form-control', 'dropdown-menu', 'placeholder'=>'Selecione o Estado']); ?>

            </div>

         <!-- No Email Field -->
            <div class="form-group col-sm-6">
            <?php echo Form::label('no_email', 'Email:'); ?>

            <?php echo Form::email('no_email', null, ['class' => 'form-control', 'placeholder'=>'Email válido']); ?>

            </div>
        <!-- Co Telefone Pais Field -->
            <div class="form-group col-sm-6">
            <?php echo Form::label('co_telefone_pais', 'Código Telefone:'); ?>

            <?php echo Form::text('co_telefone_pais', null, ['class' => 'form-control',  'placeholder'=>'Código DDD', 'maxlength' => '3']); ?>

            </div>
        <!-- Nu Telefone Field -->
            <div class="form-group col-sm-6">
            <?php echo Form::label('nu_telefone', 'Número Telefone:'); ?>

            <?php echo Form::number('nu_telefone', null, ['class' => 'form-control', 'placeholder'=>'Telefone - Apenas números', 'maxlength' => '10']); ?>

            </div>
      </p>        
    </div>
    <div id="missao">
      <p>
            <div class="form-group col-sm-6">
            <?php echo Form::label('tipo_carisma_id', 'Carisma:'); ?>

            <?php echo Form::select('tipo_carisma_id', $carismas, $membro->tipo_carisma_id, ['id' => 'tipo_carisma_id', 'class' => 'form-control', 'dropdown-menu', 'placeholder'=>'Selecione o Carisma']); ?>

            </div>

            <div class="form-group col-sm-6">
            <?php echo Form::label('equipe_id', 'Equipe'); ?>

            <?php echo Form::select('equipe_id', $equipes, $membro->equipe_id, ['id' => 'equipe_id', 'class' => 'form-control', 'dropdown-menu', 'placeholder'=>'Selecione a Equipe']); ?>

            </div>

                    <!-- No Diocese Field -->
<!-- Colocar o nome do responsável quando implementado no CRUD Equipe -->



      </p>               
    </div>
    <div id="caminho">
      <p>

        <!-- Diocese Caminho Field -->
            <div class="form-group col-sm-6">
            <?php echo Form::label('diocese_id', 'Diocese'); ?>

            <?php echo Form::select('diocese_id', $dioceses, $membro->diocese_id, ['id' => 'diocese_id', 'class' => 'form-control', 'dropdown-menu', 'placeholder'=>'Selecione a Diocese']); ?>

            </div>


        <!-- No Cidade Field -->
            <div class="form-group col-sm-6">
            <?php echo Form::label('no_cidade', 'Cidade:'); ?>

            <?php echo Form::text('no_cidade', null, ['class' => 'form-control', 'placeholder'=>'Cidade de origem']); ?>

            </div>


        <!-- No Paroquia Field -->
            <div class="form-group col-sm-6">
            <?php echo Form::label('no_paroquia', 'Paróquia:'); ?>

            <?php echo Form::text('no_paroquia', null, ['class' => 'form-control', 'placeholder'=>'Paróquia de origem']); ?>

            </div>


        <!-- Nu Comunidade Field -->
            <div class="form-group col-sm-6">
            <?php echo Form::label('nu_comunidade', 'Número Comunidade:'); ?>

            <?php echo Form::text('nu_comunidade', null, ['class' => 'form-control', 'maxlength' => '2']); ?>

            </div>


        <!-- Etapa Caminho Field -->
            <div class="form-group col-sm-6">
            <?php echo Form::label('etapa_id', 'Etapa'); ?>

            <?php echo Form::select('etapa_id', $etapas, $membro->etapa_id, ['id' => 'etapa_id', 'class' => 'form-control', 'dropdown-menu', 'placeholder'=>'Selecione a Etapa']); ?>

            </div>

        </p>   
      </div>
    </div>
  </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar e concluir', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('membros.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
