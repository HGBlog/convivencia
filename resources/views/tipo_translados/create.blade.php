@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Criar novo Tipo de Translado
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tipoTranslados.store']) !!}

                        @include('tipoTranslados.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
