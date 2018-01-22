@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Tipo Translado</h1>
            </div>
        </div>

        @include('adminlte-templates::common.errors')

        <div class="row">
            {!! Form::model($tipoTranslado, ['route' => ['tipoTranslados.update', $tipoTranslado->id], 'method' => 'patch']) !!}

            @include('tipo_translados.fields')

            {!! Form::close() !!}
        </div>
@endsection
