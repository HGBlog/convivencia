@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Editar Tipo de Quarto</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($tipoQuarto, ['route' => ['tipoQuartos.update', $tipoQuarto->id], 'method' => 'patch']) !!}

            @include('tipo_quartos.fields')

            {!! Form::close() !!}
        </div>
@endsection
