@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Diocese
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($diocese, ['route' => ['dioceses.update', $diocese->id], 'method' => 'patch']) !!}

                        @include('dioceses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection