@extends('layouts.app')

@section('content')
    @include('tipo_equipes.show_fields')

    <div class="form-group">
           <a href="{!! route('tipoEquipes.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
