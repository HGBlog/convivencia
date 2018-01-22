@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Acolhimento Extra</h1>
            </div>
        </div>

        @include('adminlte-templates::common.errors')

        <div class="row">
            {!! Form::model($acolhidaExtra, ['route' => ['acolhidaExtras.update', $acolhidaExtra->id], 'method' => 'patch']) !!}

            @include('acolhida_extras.fields')

            {!! Form::close() !!}
        </div>
@endsection
