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
                                @if(Auth::user()->hasRole('usuario') | empty(Auth::user()->hasRole('admin')|Auth::user()->hasRole('responsavel')))
                                    <h4>Você acessou o Sistema como um usuário sem permissão para criação de Equipe e inscrição em Convivência. <br>
                                    Aguarde a autorização do Centro Neocatecumenal de Brasília para em breve você receber o privilégio necessário no Sistema para realização das Inscrições em Convivência.<br>
                                    Qualquer dúvida, mande um email para cncbrasilia@gmail.com informando esta mensagem de erro e solicitando autorização para ingresso ao Sistema de Convivências Nacionais.</h4>
                                @endif
                                @if(Auth::user()->hasRole('admin') | Auth::user()->hasAnyRole('responsavel'))
                                    <div class="col-lg-3 col-xs-6">
                                              <!-- small box -->
                                              <div class="small-box bg-yellow">
                                                <div class="inner">
                                                  <h3>{{
            Membro::where('owner_id', auth()->user()->id)->count() +
            Membro::where('owner_id', auth()->user()->id)->where('no_conjuge','<>', '')->count() +
            Membro::where('mregiao_id', auth()->user()->mregiao_id)->where('owner_id','<>', auth()->user()->id)->count() +            
            Membro::where('mregiao_id', auth()->user()->mregiao_id)->where('owner_id','<>', auth()->user()->id)->where('no_conjuge','<>', '')->count()}}</h3>

                                                  <p>Membros da Equipe</p>
                                                </div>
                                                <div class="icon">
                                                  <ul >
                                                    <i class="ion ion-person-add"></i>
                                                  </ul>
                                                </div>
                                                <a href="./membros" class="small-box-footer">
                                                  Lista de Membros <i class="fa fa-arrow-circle-right"></i>
                                                </a>
                                              </div>
                                            </div>

                                @if(!empty ( $convivencia ))
                                <div>
                                <font color="red">
                                <b>* <u>Próxima Convivência:</u> {!! $convivencia->no_nome !!}</b><br>
                                <b>* <u>Data:</u> {!! Carbon\Carbon::parse($convivencia->dt_inicio)->format('d/m/Y') !!} a {!! Carbon\Carbon::parse($convivencia->dt_fim)->format('d/m/Y') !!}<br></b>
                                <b>* <u>Fim das inscrições:</u> {!! Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('d/m/Y') !!}</b><br>
                                <b>* <u>Local:</u> {!! $local->where('id', $convivencia->local_convivencia_id)->pluck('no_local')->first() !!}</b><br>
                                <b>*  {!! $convivencia->no_observacoes !!}</b><br>                    
                                <a class="btn btn-primary pull-left" style="margin-top: 25px" href="{!! route('convivencias.lista_ativas') !!}">Inscrições</a>
                                <br><br><br><br>
                                </font>
                                </div>
                                @else
                                <h2><font color="red">Não existem convivências com inscrições abertas</font></h2><br><br>
                                @endif

                                Bem vindos ao Sistema de Inscrições de Convivências Nacionais do Caminho Neocatecumenal do Brasil.<br>
                                Neste Sistema você deverá fazer as inscrições em todas as Convivências com a Equipe Nacional. Todos os membros das Equipes de sua região deverão ser cadastrados <b>uma única vez</b>. As informações de viagem (meios de transporte, vôos, horários de chegada e de retorno) e informações fundamentais para as equipes de hospedagem, acolhimento, traslados e organização, na chegada e no retorno, <b>informados a cada convivência</b>.
                                <br><br>
                                
                                <b>Dúvidas:</b>
                                <br>
                                1 - Sobre a <b>utilização do Sistema de Inscrições de Convivências Nacionais</b> entre em contato com Osmar - (61) 99837-9414 - cncbrasilia@gmail.com<br>
                                2 - Sobre <b>acolhimentos e traslados</b> entre em contato com a Graça: (61) 99997-6901 - cncbrasilia.graca@gmail.com <br>
                                3 - Sobre <b>hospedagem</b> entre em contato com a Odisséia: (61) 99814 -8562 casaconvivencias.sfn@gmail.com
                                <br> <br>
                                Clique <a href="{{ URL::to('download/Tutorial_Sistema_Convivencia.pdf') }}" target="_blank">aqui </a> para acesso ao tutorial de utilização do Sistema

                                @endif 
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection