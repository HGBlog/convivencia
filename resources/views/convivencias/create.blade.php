@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Criar nova Convivência</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'convivencias.store']) !!}

            {{ Form::hidden('is_ativo', 0) }}
            @include('convivencias.fields')

        {!! Form::close() !!}
    </div>
@endsection


    