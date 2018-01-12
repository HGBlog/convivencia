@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Tipo Equipe</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($tipoEquipe, ['route' => ['tipoEquipes.update', $tipoEquipe->id], 'method' => 'patch']) !!}

            @include('tipo_equipes.fields')

            {!! Form::close() !!}
        </div>
@endsection
