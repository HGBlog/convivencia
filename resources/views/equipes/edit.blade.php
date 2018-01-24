@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Editar Equipe</h1>
            </div>
        </div>

        @include('adminlte-templates::common.errors')

        <div class="row">
            {!! Form::model($equipe, ['route' => ['equipes.update', $equipe->id], 'method' => 'patch']) !!}

            @include('equipes.fields')

            {!! Form::close() !!}
        </div>
@endsection
