@extends('layouts.app')

@section('content')

        <h1 class="pull-left">Incrição de Membros na Convivência</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('membros.create') !!}">Novo membro</a>
        <!--
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('convivenciaMembros.create') !!}">Add New</a>
		-->
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('convivencias.inscricaotable')

@endsection
