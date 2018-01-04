@extends('layouts.app')

@section('content')
    @include('membros.show_fields')

    <div class="form-group">
           <a href="{!! route('membros.index') !!}" class="btn btn-default">Voltar</a>
    </div>
@endsection
