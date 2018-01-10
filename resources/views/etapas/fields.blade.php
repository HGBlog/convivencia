<!-- No Etapa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_etapa', 'No Etapa:') !!}
    {!! Form::text('no_etapa', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('etapas.index') !!}" class="btn btn-default">Cancel</a>
</div>
