@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Macro Regiao
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'macroRegiaos.store']) !!}

                        @include('macro_regiaos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
