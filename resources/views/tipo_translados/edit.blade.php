@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Tipo de Translado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                    {!! Form::model($tipoTranslado, ['route' => ['tipoTranslados.update', $tipoTranslado->id], 'method' => 'patch']) !!}

                    @include('tipo_translados.fields')

                    {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
