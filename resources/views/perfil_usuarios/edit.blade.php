@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Perfil Usuario</h1>
            </div>
        </div>

        @include('adminlte-templates::common.errors')

        <div class="row">
            {!! Form::model($perfilUsuario, ['route' => ['perfilUsuarios.update', $perfilUsuario->id], 'method' => 'patch']) !!}

            @include('perfil_usuarios.fields')

            {!! Form::close() !!}
        </div>
@endsection
