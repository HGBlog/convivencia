<!-- No Macro Regiao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_macro_regiao', 'No Macro Regiao:') !!}
    {!! Form::text('no_macro_regiao', null, ['class' => 'form-control']) !!}
</div>

<!-- No Responsavel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_responsavel', 'No Responsavel:') !!}
    {!! Form::text('no_responsavel', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('macroRegiaos.index') !!}" class="btn btn-default">Cancel</a>
</div>
