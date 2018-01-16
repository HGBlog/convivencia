
<div class="simple-tab" >
  <ul>
    <li class="active">Dados Pessoais</li>
    <li>Dados do Caminho</li>
    <li>Dados da missão</li>
    <li>Contatos</li>
  </ul>
  <div class="form-group col-sm-7">
    <div class="active">
      <p>
            {!! Form::label('no_usuario', 'Nome do membro:') !!}
            {!! Form::text('no_usuario', null, ['class' => 'form-control', 'placeholder'=>'Nome completo']) !!}

            {!! Form::label('no_sexo', 'Sexo:') !!}
            {!! Form::select('no_sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['class' => 'form-control']) !!}
        
            {!! Form::label('no_pais', 'País:') !!}
            {!! Form::text('no_pais', null, ['class' => 'form-control', 'placeholder'=>'País']) !!}
      </p>        
    </div>
    <div id="caminho">
      <p>


            {!! Form::label('equipe_id', 'Equipe') !!}
            {!! Form::select('equipe_id', $equipes, $membro->equipe_id, ['id' => 'equipe_id', 'class' => 'form-control', 'dropdown-menu'])!!}

                    <!-- No Diocese Field -->

            {!! Form::label('no_diocese', 'Diocese:') !!}
            {!! Form::text('no_diocese', null, ['class' => 'form-control', 'placeholder'=>'Diocese']) !!}


        <!-- No Cidade Field -->

            {!! Form::label('no_cidade', 'Cidade:') !!}
            {!! Form::text('no_cidade', null, ['class' => 'form-control', 'placeholder'=>'Cidade de origem']) !!}


        <!-- No Paroquia Field -->

            {!! Form::label('no_paroquia', 'Paróquia:') !!}
            {!! Form::text('no_paroquia', null, ['class' => 'form-control', 'placeholder'=>'Paróquia de origem']) !!}


        <!-- Nu Comunidade Field -->

            {!! Form::label('nu_comunidade', 'Número Comunidade:') !!}
            {!! Form::text('nu_comunidade', null, ['class' => 'form-control', 'maxlength' => '2']) !!}


        <!-- Etapa Caminho Field -->
        
            {!! Form::label('etapa_id', 'Etapa') !!}
            {!! Form::select('etapa_id', $etapas, $membro->etapa_id, ['id' => 'etapa_id', 'class' => 'form-control', 'dropdown-menu'])!!}
      </p>               
    </div>
    <div id="missao">
      <p>

            {!! Form::label('tipo_carisma_id', 'Carisma:') !!}
            {!! Form::select('tipo_carisma_id', $carismas, $membro->tipo_carisma_id, ['id' => 'tipo_carisma_id', 'class' => 'form-control', 'dropdown-menu'])!!}
      </p>   
    </div>
    <div id="contato">
      <p>

         <!-- No Email Field -->
        
            {!! Form::label('no_email', 'Email:') !!}
            {!! Form::email('no_email', null, ['class' => 'form-control', 'placeholder'=>'Email válido']) !!}
        <!-- Co Telefone Pais Field -->

            {!! Form::label('co_telefone_pais', 'Código Telefone:') !!}
            {!! Form::text('co_telefone_pais', null, ['class' => 'form-control', 'placeholder'=>'Código DDD', 'maxlength' => '3']) !!}


        <!-- Nu Telefone Field -->

            {!! Form::label('nu_telefone', 'Número Telefone:') !!}
            {!! Form::number('nu_telefone', null, ['class' => 'form-control', 'placeholder'=>'Telefone - Apenas números', 'maxlength' => '10']) !!}


        


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
