@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Acolhida</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($acolhida, [
                'route' => ['acolhidas.update', 'convivencia/'.$convivencia_id.'/membro/'.$membro_id], 
                'method' => 'patch'
                ]) !!}

                {{ Form::hidden('convivencia_id', $convivencia_id) }}
                {{ Form::hidden('membro_id', $membro_id) }}
                                
                @include('acolhidas.fields')

            {!! Form::close() !!}
        </div>
@endsection