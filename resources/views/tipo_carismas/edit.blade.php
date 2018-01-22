@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Tipo Carisma</h1>
            </div>
        </div>

        @include('adminlte-templates::common.errors')

        <div class="row">
            {!! Form::model($tipoCarisma, ['route' => ['tipoCarismas.update', $tipoCarisma->id], 'method' => 'patch']) !!}

            @include('tipo_carismas.fields')

            {!! Form::close() !!}
        </div>
@endsection
