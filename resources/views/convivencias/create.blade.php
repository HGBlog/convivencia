@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Convivencia</h1>
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
