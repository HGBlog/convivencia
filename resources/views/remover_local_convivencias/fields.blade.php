<!-- No Local Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_local', 'No Local:') !!}
    {!! Form::text('no_local', null, ['class' => 'form-control']) !!}
</div>

<!-- Nu Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nu_telefone', 'Nu Telefone:') !!}
    {!! Form::number('nu_telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- No Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_cidade', 'No Cidade:') !!}
    {!! Form::text('no_cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- No Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_endereco', 'No Endereco:') !!}
    {!! Form::text('no_endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- No Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('no_observacoes', 'No Observacoes:') !!}
    {!! Form::textarea('no_observacoes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('removerLocalConvivencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
