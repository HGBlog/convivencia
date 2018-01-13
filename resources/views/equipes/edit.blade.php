@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Equipe</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($equipe, ['route' => ['equipes.update', $equipe->id], 'method' => 'patch']) !!}

            @include('equipes.fields')

            {!! Form::close() !!}
        </div>
@endsection
