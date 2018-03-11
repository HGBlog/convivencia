<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Nome:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'readonly']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control', 'readonly']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('mregiao_id', 'Macro-região'); ?>

    <?php echo Form::select('mregiao_id', $macroregiaos, $usuario->mregiao_id, ['id' => 'mregiao_id', 'class' => 'form-control', 'dropdown-menu', 'placeholder'=>'Selecione o Macro-região']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('usuarios.index'); ?>" class="btn btn-default">Cancelar</a>
</div>