<div id="smartwizard" class="col-sm-9">
  <ul>
    <li><a href="#step-1">Passo 1<br /><small>Faça aqui a inscrição</small></a></li>
    <li><a href="#step-2">Passo 2<br /><small>Informe aqui os dados de chegada</small></a></li>
    <li><a href="#step-3">Passo 3<br /><small>Informe aqui os dados de partida</small></a></li>
    <li><a href="#step-4">Passo 4<br /><small>Informações adicionais</small></a></li>
  </ul>
  
  <div>
      <div id="step-1" class="">
          {!! Form::label('is_ativo', 'Vai para a convivência?') !!}
          {!! Form::checkbox('is_ativo', true, $acolhida->is_ativo,  ['class' => 'form-control']) !!}

          {!! Form::label('tipo_translado_id', 'Translado:') !!}
          {!! Form::select('tipo_translado_id', $translado, $acolhida->tipo_translado_id, ['id' => 'tipo_translado_id', 'class' => 'form-control', 'dropdown-menu'])!!}


          {!! Form::label('acolhida_extra_id', 'Acolhimento Extra') !!}
          {!! Form::select('acolhida_extra_id', $acolhida_extra, $acolhida->pluck('acolhida_extra_id'), ['id' => 'acolhida_extra_id', 'class' => 'form-control', 'dropdown-menu'])!!}

      </div>
      <div id="step-2" class="">




        {!! Form::label('dt_chegada', 'Data de chegada:') !!}
        {!! Form::date('dt_chegada', Carbon\Carbon::parse($acolhida->dt_chegada)->format('Y-m-d'), ['class' => 'form-control', 'placeholder'=>'dd-mm-AAAA']) !!}

        {!! Form::label('nu_hora_chegada', 'Hora de chegada:') !!}
        {!! Form::text('nu_hora_chegada', null, ['class' => 'form-control']) !!}

        {!! Form::label('nu_voo_chegada', 'Número vôo:') !!}
        {!! Form::text('nu_voo_chegada', null, ['class' => 'form-control', 'placeholder'=>'Número do vôo se for o caso']) !!}

        {!! Form::label('no_local_chegada', 'Local de desembarque:') !!}
        {!! Form::text('no_local_chegada', null, ['class' => 'form-control', 'placeholder'=>'Informar o Aeroporto, Rodoviária ou Local de desembarque']) !!}


      </div>
      <div id="step-3" class="">

    {!! Form::label('dt_saida', 'Data de saída:') !!}
    {!! Form::date('dt_saida', Carbon\Carbon::parse($acolhida->dt_saida)->format('Y-m-d'), ['class' => 'form-control','placeholder'=>'Formato dd-mm-AAAA']) !!}


    {!! Form::label('nu_hora_saida', 'Hora de saída:') !!}
    {!! Form::text('nu_hora_saida', null, ['class' => 'form-control']) !!}

    {!! Form::label('nu_voo_saida', 'Número vôo:') !!}
    {!! Form::text('nu_voo_saida', null, ['class' => 'form-control', 'placeholder'=>'Número do vôo se for o caso']) !!}

    {!! Form::label('no_local_saida', 'Local de embarque:') !!}
    {!! Form::text('no_local_saida', null, ['class' => 'form-control', 'placeholder'=>'Informar o Aeroporto, Rodoviária ou Local de embarque']) !!}

      </div>
      <div id="step-4" class="">

    {!! Form::label('no_observacoes', 'Observações:') !!}
    {!! Form::textarea('no_observacoes', null, ['class' => 'form-control', 'rows' => '5']) !!}

      </div>

  </div>
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('membros.index') !!}" class="btn btn-default" >Cancel</a>
</div>