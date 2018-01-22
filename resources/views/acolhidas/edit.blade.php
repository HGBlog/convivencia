@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Dados de Acolhimento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                    {!! Form::model($acolhida, [
                    'route' => ['acolhidas.update', 'convivencia/'.$convivencia_id.'/membro/'.$membro_id], 
                    'method' => 'patch'
                    ]) !!}

                    {{ Form::hidden('convivencia_id', $convivencia_id) }}
                    {{ Form::hidden('membro_id', $membro_id) }}
                    {{ Form::hidden('is_ativo', 0) }}
                                    
                    @include('acolhidas.fields')

                    {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection