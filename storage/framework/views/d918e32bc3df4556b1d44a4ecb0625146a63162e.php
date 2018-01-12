<div class="form-group col-sm-6">
    <?php echo Form::label('no_usuario', 'Nome do membro:'); ?>

    <?php echo Form::text('no_usuario', null, ['class' => 'form-control', 'placeholder'=>'Nome completo']); ?>

</div>

<div class="form-group col-sm-6">

    <?php echo Form::label('tipo_carisma_id', 'Carisma:'); ?>

    <?php echo Form::select('tipo_carisma_id', $carismas, $membro->tipo_carisma_id, ['id' => 'tipo_carisma_id', 'class' => 'form-control', 'dropdown-menu']); ?>

</div>

<!-- No Pais Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_pais', 'País:'); ?>

    <?php echo Form::text('no_pais', null, ['class' => 'form-control', 'placeholder'=>'País']); ?>

</div>

<!-- No Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_email', 'Email:'); ?>

    <?php echo Form::email('no_email', null, ['class' => 'form-control', 'placeholder'=>'Email válido']); ?>

</div>

<!-- No Sexo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_sexo', 'Sexo:'); ?>

    <?php echo Form::select('no_sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control']); ?>

</div>

<!-- Co Telefone Pais Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('co_telefone_pais', 'Código Telefone:'); ?>

    <?php echo Form::text('co_telefone_pais', null, ['class' => 'form-control', 'placeholder'=>'Código DDD', 'maxlength' => '3']); ?>

</div>

<!-- Nu Telefone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_telefone', 'Número Telefone:'); ?>

    <?php echo Form::number('nu_telefone', null, ['class' => 'form-control', 'placeholder'=>'Telefone - Apenas números', 'maxlength' => '10']); ?>

</div>

<!-- No Diocese Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_diocese', 'Diocese:'); ?>

    <?php echo Form::text('no_diocese', null, ['class' => 'form-control', 'placeholder'=>'Diocese']); ?>

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

    <?php echo Form::select('etapa_id', $etapas, $membro->etapa_id, ['id' => 'etapa_id', 'class' => 'form-control', 'dropdown-menu']); ?>


</div>

<!-- Nu Ano Inicio Caminho Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_ano_inicio_caminho', 'Ano Início do Caminho:'); ?>

    <?php echo Form::text('nu_ano_inicio_caminho', null, ['class' => 'form-control', 'placeholder'=>'Inserir o ano', 'maxlength' => '4']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('membros.index'); ?>" class="btn btn-default">Cancel</a>
</div>
