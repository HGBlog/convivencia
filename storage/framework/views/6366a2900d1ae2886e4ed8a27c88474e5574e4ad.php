<!-- No Local Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_local', 'No Local:'); ?>

    <?php echo Form::text('no_local', null, ['class' => 'form-control']); ?>

</div>

<!-- Nu Telefone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nu_telefone', 'Nu Telefone:'); ?>

    <?php echo Form::number('nu_telefone', null, ['class' => 'form-control']); ?>

</div>

<!-- No Cidade Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_cidade', 'No Cidade:'); ?>

    <?php echo Form::text('no_cidade', null, ['class' => 'form-control']); ?>

</div>

<!-- No Endereco Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_endereco', 'No Endereco:'); ?>

    <?php echo Form::text('no_endereco', null, ['class' => 'form-control']); ?>

</div>

<!-- No Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('no_observacoes', 'No Observacoes:'); ?>

    <?php echo Form::textarea('no_observacoes', null, ['class' => 'form-control', 'rows' => '5']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('localConvivencias.index'); ?>" class="btn btn-default">Cancel</a>
</div>
