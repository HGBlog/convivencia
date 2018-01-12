@extends('layouts.app')

@section('content')
    @include('tipo_carismas.show_fields')

    <div class="form-group">
           <a href="{!! route('tipoCarismas.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
