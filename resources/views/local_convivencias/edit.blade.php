@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Local Convivencia</h1>
            </div>
        </div>

        @include('adminlte-templates::common.errors')

        <div class="row">
            {!! Form::model($localConvivencia, ['route' => ['localConvivencias.update', $localConvivencia->id], 'method' => 'patch']) !!}

            @include('local_convivencias.fields')

            {!! Form::close() !!}
        </div>
@endsection
