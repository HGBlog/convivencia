@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Tipos de Quartos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('tipoQuartos.create') !!}">Adicionar novo</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('tipo_quartos.table')
        
@endsection
