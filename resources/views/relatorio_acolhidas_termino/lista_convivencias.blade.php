@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Selecione a Convivência para Emissão de Relatório de Acolhimento - Término</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

            @include('flash::message')

            <div class="clearfix"></div>
                <div class="box box-primary">
                    <div class="box-body">
                        
                        {!! Form::model(null, ['route' => ['relatorio_acolhidas_termino'], 'method' => 'post']) !!}
                        @include('relatorio_acolhidas_termino.lista_convivenciasfields')
                        {!! Form::close() !!}
                    </div>
                </div>
            <div class="text-center">
        
        </div>
    </div>
@endsection