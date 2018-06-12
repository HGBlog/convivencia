@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Alterar Macro-região de Pessoa de Equipe
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($membro, ['route' => ['membros.update_macroregiao', $membro->id], 'method' => 'patch']) !!}

                        @include('membros.macroregiaofields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection