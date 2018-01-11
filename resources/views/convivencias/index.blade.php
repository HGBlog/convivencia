@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Lista de Convivencias</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('convivencias.create') !!}">Criar nova Convivência</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('convivencias.table')
        
@endsection
