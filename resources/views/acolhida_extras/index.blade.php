@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Acolhimento Extra</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('acolhidaExtras.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('acolhida_extras.table')
        
@endsection
