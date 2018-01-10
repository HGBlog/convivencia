@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Acolhida Extra</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'acolhidaExtras.store']) !!}

            @include('acolhida_extras.fields')

        {!! Form::close() !!}
    </div>
@endsection
