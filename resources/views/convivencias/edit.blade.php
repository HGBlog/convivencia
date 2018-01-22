@extends('layouts.app')

@section('content')
@section('content')
    <section class="content-header">
        <h1>
            Alterar dados da Convivência
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
            {!! Form::model($convivencia, ['route' => ['convivencias.update', $convivencia->id], 'method' => 'patch']) !!}

            {{ Form::hidden('is_ativo', 0) }}
            @include('convivencias.fields')

            {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
