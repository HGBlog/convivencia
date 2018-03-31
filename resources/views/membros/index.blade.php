
@extends('layouts.app')

@section('content')
 	<section class="content-header">
        <h1 class="pull-left">Membros da Macro-região - {{$macroregiao->no_macro_regiao}}
        	<br><font color="red"><b>{{
            Membro::where('mregiao_id', auth()->user()->mregiao_id)->count() +            
            Membro::where('mregiao_id', auth()->user()->mregiao_id)->where('no_conjuge','<>', '')->count()}}</b> 
        @if ((
        Membro::where('mregiao_id', auth()->user()->mregiao_id)->count()+
        Membro::where('mregiao_id', auth()->user()->mregiao_id)->where('no_conjuge','<>', '')->count()) >1 )
        {{ 'cadastrados' }}
        @elseif  ((
        Membro::where('mregiao_id', auth()->user()->mregiao_id)->count()+
        Membro::where('mregiao_id', auth()->user()->mregiao_id)->where('no_conjuge','<>', '')->count())==0)
        {{ '- Nenhum membro cadastrado'}}
        @else
        {{ 'cadastrado' }}
        @endif
    	</font></h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('membros.create') !!}">Adicionar Novo Membro</a>
        </h1>
    </section>        
<div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
                <ul class="pagination">
        	<div align="center">Página {{ $membros->currentPage() }} de {{ $membros->lastPage() }}</div>
		    <!-- Previous Page Link -->

		    @if ($membros->onFirstPage())
		        <li class="disabled"><span>&laquo;</span></li>
		    @else
		        <li><a href="{{ $membros->previousPageUrl() }}" rel="prev">&laquo;</a></li>
		    @endif
		    	
		    <!-- Pagination Elements -->
		    @foreach ($membros as $membro)
		        <!-- "Three Dots" Separator -->
		        @if (is_string($membro))
		            <li class="disabled"><span>{{ $membro }}</span></li>
		        @endif

		        <!-- Array Of Links -->
		        @if (is_array($membro))
		            @foreach ($membro as $page => $url)
		                @if ($page == $paginator->currentPage())
		                    <li class="active"><span>{{ $page }}</span></li>
		                @else
		                    <li><a href="{{ $url }}">{{ $page }}</a></li>
		                @endif
		            @endforeach
		        @endif
		    @endforeach

		    <!-- Next Page Link -->
		    @if ($membros->hasMorePages())
		        <li><a href="{{ $membros->nextPageUrl() }}" rel="next">&raquo;</a></li>
		    @else
		        <li class="disabled"><span>&raquo;</span></li>
		    @endif

		</ul>
        <div class="box box-primary">
            <div class="box-body">
                    @include('membros.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
</div>
         
@endsection






    