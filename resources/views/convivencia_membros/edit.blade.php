@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Convivencia Membro</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($convivenciaMembro, ['route' => ['convivenciaMembros.update', $convivenciaMembro->id], 'method' => 'patch']) !!}

            @include('convivencia_membros.fields')

            {!! Form::close() !!}
        </div>
@endsection
