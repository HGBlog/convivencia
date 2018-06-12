@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Relatorio Pessoas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relatorioMembros, ['route' => ['relatorioMembros.update', $relatorioMembros->id], 'method' => 'patch']) !!}

                        @include('relatorio_membros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection