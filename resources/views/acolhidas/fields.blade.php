<div id="smartwizard" class="col-sm-9">
  <ul>
    <li><a href="#step-1">Passo 1<br /><small>Faça aqui a inscrição</small></a></li>
    <li><a href="#step-2">Passo 2<br /><small>Informe aqui os dados de chegada</small></a></li>
    <li><a href="#step-3">Passo 3<br /><small>Informe aqui os dados de partida</small></a></li>
    <li><a href="#step-4">Passo 4<br /><small>Informações adicionais</small></a></li>
  </ul>
  
  <div>
      <div id="step-1" class="form-group col-sm-12">
          <br>
          <div class="form-group col-sm-12">
            <div class="form-group col-sm-6">
               <label class="checkbox-inline">
                {!! Form::checkbox('is_ativo', true, $acolhida->is_ativo, ['data-toggle' => 'toggle', 'data-on' => 'Sim',  'data-off' => 'Não',  'data-onstyle' => 'success',  'data-offstyle' => 'danger', 'data-size' => 'mini']) !!}
              </label>

              {!! Form::label('is_ativo', 'Vai para a convivência?') !!}
            </div>
              <div class="form-group col-sm-6">
              @if (!empty($membro
                ->where('id', $membro_id)
                ->pluck('no_conjuge')
                ->first()
              ))
               <label class="checkbox-inline">

                {!! Form::checkbox('is_conjuge', true, $acolhida->is_conjuge, ['data-toggle' => 'toggle', 'data-on' => 'Sim',  'data-off' => 'Não',  'data-onstyle' => 'success',  'data-offstyle' => 'danger', 'data-size' => 'mini']) !!}
              {!! Form::label('is_conjuge', 'O cônjuge vai?') !!}
                        
              </label>
              @endif 

          </div>
        </div>
           <br>
          <div class="form-group col-sm-6">
          {!! Form::label('tipo_translado_id', 'Translado:') !!}
          {!! Form::select('tipo_translado_id', $translado, $acolhida->tipo_translado_id, ['id' => 'tipo_translado_id', 'class' => 'form-control', 'dropdown-menu', 'required'])!!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('acolhida_extra_id', 'Acolhimento Extra') !!}
          {!! Form::select('acolhida_extra_id', $acolhida_extra, $acolhida->acolhida_extra_id, ['id' => 'acolhida_extra_id', 'class' => 'form-control', 'dropdown-menu', 'required'])!!}
          </div>
      </div>
      <div id="step-2" class="form-group col-sm-12">
        <br>
        <div class="form-group col-sm-6">
        {!! Form::label('dt_chegada', 'Data de chegada:') !!}
        {!! Form::date('dt_chegada', $acolhida->dt_chegada ? Carbon\Carbon::parse($acolhida->dt_chegada) : Carbon\Carbon::parse($convivencia->dt_inicio)->format('Y-m-d'), ['class' => 'form-control', 'placeholder'=>'dd-mm-AAAA', 'required']) !!}
        </div>

         <div class="form-group col-sm-6">
        {!! Form::label('nu_hora_chegada', 'Hora de chegada:') !!}
        {!! Form::text('nu_hora_chegada', null, ['class' => 'form-control', 'id' => 'horario', 'maxlength' => '5']) !!}
        </div>
        <div class="form-group col-sm-6">
        {!! Form::label('nu_voo_chegada', 'Número vôo:') !!}
        {!! Form::text('nu_voo_chegada', null, ['class' => 'form-control', 'placeholder'=>'Número do vôo se for o caso']) !!}
        </div>
        <div class="form-group col-sm-6">
        {!! Form::label('no_local_chegada', 'Local de desembarque:') !!}
        {!! Form::text('no_local_chegada', null, ['class' => 'form-control', 'placeholder'=>'Informar o Aeroporto, Rodoviária ou Local de desembarque']) !!}
        </div>

      </div>
      <div id="step-3" class="form-group col-sm-12">
      <br>
           <div class="form-group col-sm-6">
          {!! Form::label('dt_saida', 'Data de saída:') !!}
          {!! Form::date('dt_saida', $acolhida->dt_saida ? Carbon\Carbon::parse($acolhida->dt_saida) : Carbon\Carbon::parse($convivencia->dt_fim)->format('Y-m-d'), ['class' => 'form-control','placeholder'=>'Formato dd-mm-AAAA', 'required']) !!}
          </div>
           <div class="form-group col-sm-6">
          {!! Form::label('nu_hora_saida', 'Hora de saída:') !!}
          {!! Form::text('nu_hora_saida', null, ['class' => 'form-control', 'id' => 'horario2', 'maxlength' => '5']) !!}
           </div>
           <div class="form-group col-sm-6">
          {!! Form::label('nu_voo_saida', 'Número vôo:') !!}
          {!! Form::text('nu_voo_saida', null, ['class' => 'form-control', 'placeholder'=>'Número do vôo se for o caso']) !!}
          </div>
           <div class="form-group col-sm-6">
          {!! Form::label('no_local_saida', 'Local de embarque:') !!}
          {!! Form::text('no_local_saida', null, ['class' => 'form-control', 'placeholder'=>'Informar o Aeroporto, Rodoviária ou Local de embarque']) !!}
           </div>
      </div>
      <div id="step-4" class="form-group col-sm-12">
      <br>
          {!! Form::label('no_observacoes', 'Observações:') !!}
          {!! Form::textarea('no_observacoes', null, ['class' => 'form-control', 'rows' => '5', 'placeholder'=>'Informações adicionais para acolhimento e hospedagem']) !!}

      </div>

  </div>
    {!! Form::submit('Salvar e concluir', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('convivencia_inscricao',$convivencia_id) !!}" class="btn btn-default" >Cancelar</a>
</div>