
<div class="simple-tab" >
  <ul>
    <li class="active">Dados Pessoais</li>
    <li>Dados da Missão</li>
    <li>Dados do Caminho</li>
  </ul>
  <div class="form-group col-sm-7">
    <div class="active">
      <p>
            <div class="form-group col-sm-6">
              {!! Form::label('no_usuario', 'Nome do membro:') !!}
              {!! Form::text('no_usuario', null, ['class' => 'form-control', 'placeholder'=>'Nome completo']) !!}
            </div>
            <div class="form-group col-sm-6">
              {!! Form::label('no_sexo', 'Sexo:') !!}
              {!! Form::select('no_sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-6">
              {!! Form::label('no_pais', 'País:') !!}
              {!! Form::text('no_pais', null, ['class' => 'form-control', 'placeholder'=>'País']) !!}
            </div>

         <!-- No Email Field -->
            <div class="form-group col-sm-6">
            {!! Form::label('no_email', 'Email:') !!}
            {!! Form::email('no_email', null, ['class' => 'form-control', 'placeholder'=>'Email válido']) !!}
            </div>
        <!-- Co Telefone Pais Field -->
            <div class="form-group col-sm-6">
            {!! Form::label('co_telefone_pais', 'Código Telefone:') !!}
            {!! Form::text('co_telefone_pais', null, ['class' => 'form-control',  'placeholder'=>'Código DDD', 'maxlength' => '3']) !!}
            </div>
        <!-- Nu Telefone Field -->
            <div class="form-group col-sm-6">
            {!! Form::label('nu_telefone', 'Número Telefone:') !!}
            {!! Form::number('nu_telefone', null, ['class' => 'form-control', 'placeholder'=>'Telefone - Apenas números', 'maxlength' => '10']) !!}
            </div>
      </p>        
    </div>
    <div id="missao">
      <p>
            <div class="form-group col-sm-6">
            {!! Form::label('tipo_carisma_id', 'Carisma:') !!}
            {!! Form::select('tipo_carisma_id', $carismas, $membro->tipo_carisma_id, ['id' => 'tipo_carisma_id', 'class' => 'form-control', 'dropdown-menu'])!!}
            </div>

            <div class="form-group col-sm-6">
            {!! Form::label('equipe_id', 'Equipe') !!}
            {!! Form::select('equipe_id', $equipes, $membro->equipe_id, ['id' => 'equipe_id', 'class' => 'form-control', 'dropdown-menu'])!!}
            </div>

                    <!-- No Diocese Field -->
<!-- Colocar o nome do responsável quando implementado no CRUD Equipe -->



      </p>               
    </div>
    <div id="caminho">
      <p>

        <!-- Diocese Caminho Field -->
            <div class="form-group col-sm-6">
            {!! Form::label('diocese_id', 'Diocese') !!}
            {!! Form::select('diocese_id', $dioceses, $membro->diocese_id, ['id' => 'diocese_id', 'class' => 'form-control', 'dropdown-menu'])!!}
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
            {!! Form::text('nu_comunidade', null, ['class' => 'form-control', 'maxlength' => '2']) !!}
            </div>


        <!-- Etapa Caminho Field -->
            <div class="form-group col-sm-6">
            {!! Form::label('etapa_id', 'Etapa') !!}
            {!! Form::select('etapa_id', $etapas, $membro->etapa_id, ['id' => 'etapa_id', 'class' => 'form-control', 'dropdown-menu'])!!}
            </div>

        </p>   
      </div>
    </div>
  </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('membros.index') !!}" class="btn btn-default">Cancel</a>
</div>
