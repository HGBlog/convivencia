@extends('layouts.app')

@section('content')
    @include('acolhidas.show_fields')

    <div class="form-group">
           <a href="{!! route('acolhidas.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
