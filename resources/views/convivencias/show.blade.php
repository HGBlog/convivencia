@extends('layouts.app')

@section('content')
    @include('convivencias.show_fields')

    <div class="form-group">
           <a href="{!! route('convivencias.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
