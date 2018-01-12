<!-- No Translado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_translado', 'No Translado:') !!}
    {!! Form::text('no_translado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoTranslados.index') !!}" class="btn btn-default">Cancel</a>
</div>
