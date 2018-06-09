<!-- No Macro Regiao Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_macro_regiao', 'Nome da Macro-região:'); ?>

    <?php echo Form::text('no_macro_regiao', null, ['class' => 'form-control']); ?>

</div>

<!-- No Responsavel Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_responsavel', 'Nome do Responsável:'); ?>

    <?php echo Form::text('no_responsavel', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('macroRegiaos.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
