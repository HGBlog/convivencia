<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $usuario->id; ?></p>
</div>

<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo $usuario->name; ?></p>
</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <p><?php echo $usuario->email; ?></p>
</div>

<!-- Password Field -->
<div class="form-group">
    <?php echo Form::label('password', 'Password:'); ?>

    <p><?php echo $usuario->password; ?></p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    <?php echo Form::label('remember_token', 'Remember Token:'); ?>

    <p><?php echo $usuario->remember_token; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $usuario->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $usuario->updated_at; ?></p>
</div>

