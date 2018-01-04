@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Membros</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('membros.create') !!}">Novo membro</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('membros.table')
        
@endsection
