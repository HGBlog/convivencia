@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Local de Convivência
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
            {!! Form::model($localConvivencia, ['route' => ['localConvivencias.update', $localConvivencia->id], 'method' => 'patch']) !!}

            @include('local_convivencias.fields')

            {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection