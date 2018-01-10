
<div class="form-group col-sm-6">

    <?php echo Form::label('convivencia_id', 'Convivência'); ?>

    <?php echo Form::select('convivencia_id', $convivencias->pluck('no_nome', 'id'), ['id' => 'convivencia_id', 'class' => 'form-control', 'dropdown-menu']); ?>


</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Inscrever Equipe' , ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('membros.index', '$user->id'); ?>" class="btn btn-default">Voltar para lista de Membros</a>
</div>
