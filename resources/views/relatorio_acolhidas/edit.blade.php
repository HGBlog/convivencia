@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Relatorio Acolhida
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relatorioAcolhida, ['route' => ['relatorioAcolhidas.update', $relatorioAcolhida->id], 'method' => 'patch']) !!}

                        @include('relatorio_acolhidas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection