@extends('layouts.app')

@section('content')
    @include('local_convivencias.show_fields')

    <div class="form-group">
           <a href="{!! route('localConvivencias.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
