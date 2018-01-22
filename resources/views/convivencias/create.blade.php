@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Criar nova Convivência
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'convivencias.store']) !!}
                    
                        {{ Form::hidden('is_ativo', 0) }}
                        @include('convivencias.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection