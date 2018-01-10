@extends('layouts.app')

@section('content')
    @include('tipo_quartos.show_fields')

    <div class="form-group">
           <a href="{!! route('tipoQuartos.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
