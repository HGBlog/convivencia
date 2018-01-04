@extends('layouts.app')

@section('content')
    @include('usuarios.show_fields')

    <div class="form-group">
           <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
