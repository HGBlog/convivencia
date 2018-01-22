@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Inserir novo membro
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'membros.store']) !!}

                        @include('membros.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection