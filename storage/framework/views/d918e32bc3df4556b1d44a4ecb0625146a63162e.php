<div class="form-group col-sm-6">
    <?php echo Form::label('no_usuario', 'Nome do membro:'); ?>

    <?php echo Form::text('no_usuario', null, ['class' => 'form-control']); ?>

</div>

<!-- No Pais Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_pais', 'País:'); ?>

    <?php echo Form::text('no_pais', null, ['class' => 'form-control']); ?>

</div>

<!-- No Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_email', 'Email:'); ?>

    <?php echo Form::email('no_email', null, ['class' => 'form-control']); ?>

</div>

<!-- No Sexo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_sexo', 'Sexo:'); ?>

    <?php echo Form::select('no_sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control']); ?>

</div>

<!-- Co Telefone Pais Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('co_telefone_pais', 'Código Telefone:'); ?>

    <?php echo Form::number('co_telefone_pais', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Telefone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_telefone', 'Número Telefone:'); ?>

    <?php echo Form::number('nu_telefone', null, ['class' => 'form-control']); ?>

</div>

<!-- No Diocese Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_diocese', 'Diocese:'); ?>

    <?php echo Form::text('no_diocese', null, ['class' => 'form-control']); ?>

</div>

<!-- No Cidade Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_cidade', 'Cidade:'); ?>

    <?php echo Form::text('no_cidade', null, ['class' => 'form-control']); ?>

</div>

<!-- No Paroquia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_paroquia', 'Paróquia:'); ?>

    <?php echo Form::text('no_paroquia', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Comunidade Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_comunidade', 'Número Comunidade:'); ?>

    <?php echo Form::text('nu_comunidade', null, ['class' => 'form-control']); ?>

</div>

<!-- Etapa Caminho Field -->
<div class="form-group col-sm-6">

    <?php echo Form::label('etapa_id', 'Etapa'); ?>

    <?php echo Form::select('etapa_id', $etapas, $membro->pluck('etapa_id'), ['id' => 'etapa_id', 'class' => 'form-control', 'dropdown-menu']); ?>


</div>

<!-- Nu Ano Inicio Caminho Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_ano_inicio_caminho', 'Ano Início do Caminho:'); ?>

    <?php echo Form::text('nu_ano_inicio_caminho', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('membros.index'); ?>" class="btn btn-default">Cancel</a>
</div>
