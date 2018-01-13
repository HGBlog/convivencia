@extends('layouts.app')

@section('content')
    @include('equipes.show_fields')

    <div class="form-group">
           <a href="{!! route('equipes.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
