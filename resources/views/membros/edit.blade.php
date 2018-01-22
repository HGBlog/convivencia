@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Membro da Equipe
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                {!! Form::model($membro, ['route' => ['membros.update', $membro->id], 'method' => 'patch']) !!}
                    @include('membros.fields')
                {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection


