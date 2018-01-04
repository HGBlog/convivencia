<!-- No Diocese Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_diocese', 'No Diocese:'); ?>

    <?php echo Form::text('no_diocese', null, ['class' => 'form-control']); ?>

</div>

<!-- No Cidade Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_cidade', 'No Cidade:'); ?>

    <?php echo Form::text('no_cidade', null, ['class' => 'form-control']); ?>

</div>

<!-- No Paroquia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_paroquia', 'No Paroquia:'); ?>

    <?php echo Form::text('no_paroquia', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Comunidade Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_comunidade', 'Nu Comunidade:'); ?>

    <?php echo Form::text('nu_comunidade', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Ano Inicio Caminho Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_ano_inicio_caminho', 'Nu Ano Inicio Caminho:'); ?>

    <?php echo Form::text('nu_ano_inicio_caminho', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('dadosCaminhos.index'); ?>" class="btn btn-default">Cancel</a>
</div>
