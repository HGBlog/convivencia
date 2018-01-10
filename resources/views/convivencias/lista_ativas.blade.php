@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Selecione a Convivência para inscrição</h1>
            </div>
        </div>

        @include('core-templates::common.errors')
    
        <div class="row">

            {!! Form::model(null, ['route' => ['seleciona_convivencia', 'convivencia_id'], 'method' => 'post']) !!}
            
            {{ Form::hidden('is_ativo', 0) }}

            @include('convivencias.lista_ativasfields')
        

            {!! Form::close() !!}
        </div>
    
@endsection