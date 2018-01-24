@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Tipos de Carisma
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
            {!! Form::model($tipoCarisma, ['route' => ['tipoCarismas.update', $tipoCarisma->id], 'method' => 'patch']) !!}

            @include('tipo_carismas.fields')

            {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection