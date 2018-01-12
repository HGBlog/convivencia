<!-- No Carisma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_carisma', 'No Carisma:') !!}
    {!! Form::text('no_carisma', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoCarismas.index') !!}" class="btn btn-default">Cancel</a>
</div>
