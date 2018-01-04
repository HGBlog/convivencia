@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Convivencia</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($convivencia, ['route' => ['convivencias.update', $convivencia->id], 'method' => 'patch']) !!}

            @include('convivencias.fields')

            {!! Form::close() !!}
        </div>
@endsection
