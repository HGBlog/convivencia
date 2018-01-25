@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="content-header">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
            
            <div class="panel panel-default" >
                <div class="panel-heading">Seja bem vindo <b>{{Auth::user()->name}}</b>!!!</div>
                    <div class="clearfix"></div>
                        <div class="content">
                            <div class="panel-body">
                                @if(!empty ( $convivencia ))
                                <font color="red">
                                <b>* <u>Próxima Convivência:</u> {!! $convivencia->no_nome !!}</b><br>
                                <b>* <u>Data:</u> {!! Carbon\Carbon::parse($convivencia->dt_inicio)->format('d/m/Y') !!} a {!! Carbon\Carbon::parse($convivencia->dt_fim)->format('d/m/Y') !!}<br></b>
                                <b>* <u>Fim das inscrições:</u> {!! Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('d/m/Y') !!}</b><br>
                                <b>* <u>Local:</u> {!! $local->where('id', $convivencia->local_convivencia_id)->pluck('no_local')->first() !!}</b><br>                    
                                <a class="btn btn-primary pull-left" style="margin-top: 25px" href="{!! route('convivencias.lista_ativas') !!}">Inscrição para Convivência</a>
                                <br><br><br><br>
                                </font>
                                @else
                                <h2><font color="red">Não existem convivências com inscrições abertas</font></h2><br><br>
                                @endif

                                Aqui colocaremos um quadro de avisos gerais e informações sobre as convivências que estão com as inscrições abertas e um link para inscrição em cada uma.

                                <br><br>

                                Por enquanto, acesse o MENU ao lado para mais opções...<br><br>

                                O responsável começa cadastrando os membros da sua Equipe e depois deve inscrevê-los ou não na Convivência.<br><br>
                                
                                Os MENUS de ADMINISTRAÇÃO e TABELAS DE APOIO serão acessados somente pelos Administradores do Sistema para criação de NOVAS CONVIVÊNCIAS, MANUTENÇÃO DE USUÁRIOS, PERMISSÕES e inclusão de novos Tipos de Quarto, translados, etc.
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection