<div class="form-group col-sm-6">
    {!! Form::label('no_usuario', 'Nome do membro:') !!}
    {!! Form::text('no_usuario', null, ['class' => 'form-control', 'placeholder'=>'Nome completo']) !!}
</div>

<!-- No Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_pais', 'País:') !!}
    {!! Form::text('no_pais', null, ['class' => 'form-control', 'placeholder'=>'País']) !!}
</div>

<!-- No Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_email', 'Email:') !!}
    {!! Form::email('no_email', null, ['class' => 'form-control', 'placeholder'=>'Email']) !!}
</div>

<!-- No Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_sexo', 'Sexo:') !!}
    {!! Form::select('no_sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control']) !!}
</div>

<!-- Co Telefone Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('co_telefone_pais', 'Código Telefone:') !!}
    {!! Form::text('co_telefone_pais', null, ['class' => 'form-control', 'placeholder'=>'Código DDD']) !!}
</div>

<!-- Nu Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nu_telefone', 'Número Telefone:') !!}
    {!! Form::number('nu_telefone', null, ['class' => 'form-control', 'placeholder'=>'Telefone - Apenas números']) !!}
</div>

<!-- No Diocese Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_diocese', 'Diocese:') !!}
    {!! Form::text('no_diocese', null, ['class' => 'form-control', 'placeholder'=>'Diocese']) !!}
</div>

<!-- No Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_cidade', 'Cidade:') !!}
    {!! Form::text('no_cidade', null, ['class' => 'form-control', 'placeholder'=>'Cidade de origem']) !!}
</div>

<!-- No Paroquia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_paroquia', 'Paróquia:') !!}
    {!! Form::text('no_paroquia', null, ['class' => 'form-control', 'placeholder'=>'Paróquia de origem']) !!}
</div>

<!-- Nu Comunidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nu_comunidade', 'Número Comunidade:') !!}
    {!! Form::text('nu_comunidade', null, ['class' => 'form-control', 'placeholder'=>'Apenas número']) !!}
</div>

<!-- Etapa Caminho Field -->
<div class="form-group col-sm-6">

    {!! Form::label('etapa_id', 'Etapa') !!}
    {!! Form::select('etapa_id', $etapas, $membro->etapa_id, ['id' => 'etapa_id', 'class' => 'form-control', 'dropdown-menu'])!!}

</div>

<!-- Nu Ano Inicio Caminho Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nu_ano_inicio_caminho', 'Ano Início do Caminho:') !!}
    {!! Form::text('nu_ano_inicio_caminho', null, ['class' => 'form-control', 'placeholder'=>'Apenas número']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('membros.index') !!}" class="btn btn-default">Cancel</a>
</div>
