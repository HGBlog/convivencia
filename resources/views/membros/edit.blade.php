@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Editar Membro da Equipe</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($membro, ['route' => ['membros.update', $membro->id], 'method' => 'patch']) !!}

            @include('membros.fields')

            {!! Form::close() !!}
        </div>
@endsection
