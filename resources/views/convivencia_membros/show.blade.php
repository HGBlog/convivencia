@extends('layouts.app')

@section('content')
    @include('convivencia_membros.show_fields')

    <div class="form-group">
           <a href="{!! route('convivenciaMembros.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
