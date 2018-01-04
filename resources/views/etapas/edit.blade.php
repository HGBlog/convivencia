@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Etapa</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($etapa, ['route' => ['etapas.update', $etapa->id], 'method' => 'patch']) !!}

            @include('etapas.fields')

            {!! Form::close() !!}
        </div>
@endsection
