@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Remover Convivencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($removerConvivencia, ['route' => ['removerConvivencias.update', $removerConvivencia->id], 'method' => 'patch']) !!}

                        @include('remover_convivencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection