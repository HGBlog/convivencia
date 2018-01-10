@extends('layouts.app')

@section('content')
    @include('acolhida_extras.show_fields')

    <div class="form-group">
           <a href="{!! route('acolhidaExtras.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
