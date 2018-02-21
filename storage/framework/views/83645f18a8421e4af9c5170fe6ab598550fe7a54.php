<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $estado->id; ?></p>
</div>

<!-- No Estado Field -->
<div class="form-group">
    <?php echo Form::label('no_estado', 'No Estado:'); ?>

    <p><?php echo $estado->no_estado; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $estado->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $estado->updated_at; ?></p>
</div>

