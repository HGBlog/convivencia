@extends('layouts.app')

@section('content')
 	<section class="content-header">
        <h1 class="pull-left">Relatório de Acolhimento</h1>
        <h1 class="pull-right">
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                        {!! Form::model(null, ['route' => ['gera_relatorio', 'convivencia_id'], 'method' => 'post']) !!}
                        
                        {{ Form::hidden('is_ativo', 0) }}

                        @include('relatorios.acolhidasfields')

                        {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
        
@endsection
