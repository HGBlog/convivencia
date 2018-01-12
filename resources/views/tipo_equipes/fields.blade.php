<!-- No Equipe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_equipe', 'No Equipe:') !!}
    {!! Form::text('no_equipe', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoEquipes.index') !!}" class="btn btn-default">Cancel</a>
</div>
