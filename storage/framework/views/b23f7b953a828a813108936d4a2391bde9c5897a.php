<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $diocese->id; ?></p>
</div>

<!-- No Diocese Field -->
<div class="form-group">
    <?php echo Form::label('no_diocese', 'No Diocese:'); ?>

    <p><?php echo $diocese->no_diocese; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $diocese->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $diocese->updated_at; ?></p>
</div>

