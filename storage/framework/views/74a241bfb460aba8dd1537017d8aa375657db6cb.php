<!-- No Equipe Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_equipe', 'Nome da Equipe:'); ?>

    <?php echo Form::text('no_equipe', null, ['class' => 'form-control']); ?>

</div>

<!-- No Responsavel Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_responsavel', 'Nome do Responsável:'); ?>

    <?php echo Form::text('no_responsavel', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('equipes.index'); ?>" class="btn btn-default">Cancel</a>
</div>
