@extends('layouts.app')

@section('content')
 	<section class="content-header">
        <h1 class="pull-left">Selecione a Convivência para Emissão de Relatório de Acolhimento - Chegada</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model(null, ['route' => ['gera_relatorio_acolhidas_chegada', 'convivencia_id'], 'method' => 'get']) !!}                
                @include('relatorio_acolhidas_chegada.lista_convivenciasfields')
                {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
        
@endsection