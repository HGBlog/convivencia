<!-- No Diocese Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_diocese', 'Nome da Diocese:') !!}
    {!! Form::text('no_diocese', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('dioceses.index') !!}" class="btn btn-default">Cancelar</a>
</div>
