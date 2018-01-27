@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Selecione a Convivência para Inscrição</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
            {!! Form::model(null, ['route' => ['seleciona_convivencia', 'convivencia_id'], 'method' => 'post']) !!}
            
            {{ Form::hidden('is_ativo', 0) }}

            @include('convivencias.lista_ativasfields')

            {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>


@endsection