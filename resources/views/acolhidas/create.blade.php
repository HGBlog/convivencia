@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Dados de acolhimento</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'acolhidas.store']) !!}
            
            {{ Form::hidden('convivencia_id', $convivencia_id) }}
            {{ Form::hidden('membro_id', $membro_id) }}
            {{ Form::hidden('is_ativo', 0) }}
            
            @include('acolhidas.fields')

        {!! Form::close() !!}
    </div>
@endsection
