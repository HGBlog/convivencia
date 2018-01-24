@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Acolhimentos Extras
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                    {!! Form::model($acolhidaExtra, ['route' => ['acolhidaExtras.update', $acolhidaExtra->id], 'method' => 'patch']) !!}

                    @include('acolhida_extras.fields')

                    {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection