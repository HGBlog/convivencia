<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Nome:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Senha:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('remember_token', 'Remember Token:'); ?>

    <?php echo Form::text('remember_token', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('usuarios.index'); ?>" class="btn btn-default">Cancelar</a>
</div>



