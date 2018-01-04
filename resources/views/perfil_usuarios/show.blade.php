@extends('layouts.app')

@section('content')
    @include('perfil_usuarios.show_fields')

    <div class="form-group">
           <a href="{!! route('perfilUsuarios.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
