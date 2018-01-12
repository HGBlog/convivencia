@extends('layouts.app')

@section('content')
    @include('tipo_translados.show_fields')

    <div class="form-group">
           <a href="{!! route('tipoTranslados.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
