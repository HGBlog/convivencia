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
                                    Você acessou o Sistema como um usuário sem permissão para criação de Equipe e inscrição em Convivência. Aguarde a autorização do Centro Neocatecumenal de Brasília para em breve você receber o privilégio necessário no Sistema para realização das Inscrições em Convivência.
                                    Qualquer dúvida, mande um email para cncbrasilia@gmail.com informando esta mensagem de erro e solicitando autorização para ingresso ao Sistema de Convivências Nacionais.
                                @endif
                                @if(Auth::user()->hasRole('admin') | Auth::user()->hasAnyRole('responsavel'))
                                    <div class="col-lg-3 col-xs-6">
                                              <!-- small box -->
                                              <div class="small-box bg-yellow">
                                                <div class="inner">
                                                  <h3>{{Membro::where('owner_id', auth()->user()->id)->count() + Membro::where('owner_id', auth()->user()->id)->where('no_conjuge','<>', '')->count()}}</h3>

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
                                <font color="red">
                                <b>* <u>Próxima Convivência:</u> {!! $convivencia->no_nome !!}</b><br>
                                <b>* <u>Data:</u> {!! Carbon\Carbon::parse($convivencia->dt_inicio)->format('d/m/Y') !!} a {!! Carbon\Carbon::parse($convivencia->dt_fim)->format('d/m/Y') !!}<br></b>
                                <b>* <u>Fim das inscrições:</u> {!! Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('d/m/Y') !!}</b><br>
                                <b>* <u>Local:</u> {!! $local->where('id', $convivencia->local_convivencia_id)->pluck('no_local')->first() !!}</b><br>                    
                                <a class="btn btn-primary pull-left" style="margin-top: 25px" href="{!! route('convivencias.lista_ativas') !!}">Inscrições</a>
                                <br><br><br><br>
                                </font>
                                @else
                                <h2><font color="red">Não existem convivências com inscrições abertas</font></h2><br><br>
                                @endif



                                Bem vindos ao Sistema de Inscrições de Convivências Nacionais do Caminho Neocatecumenal do Brasil.<br>
                                Neste Sistema você deverá fazer as inscrições em todas as Convivências com a Equipe Nacional. Todos os membros das Equipes de sua região deverão ser cadastrados <b>uma única vez</b>. As informações de viagem (meios de transporte, vôos, horários de chegada e de retorno) e informações fundamentais para as equipes de hospedagem, acolhimento, traslados e organização, na chegada e no retorno, <b>informados a cada convivência.</b><br>
                                <b><u>Importante</u>: Todos os participantes de uma região deverão ser inscritos pelo Itinerante Responsável da Macro-região.<br> Exemplo Ceará: Equipes - CE-1, CE-2 e Ce-3 - Responsável da macro-região: Pe. Guerra.</b>

                                <br><br>
                                <b>..:: INSTRUÇÕES INICIAIS ::..</b> <br><br>
                                <b>1o Passo:</b><br> Cadastre todos os membros das equipes da região que você é o responsável. No MENU ao lado Esquerdo, clique em <b>"Membros Equipe".</b> Preencha todos os campos possíveis, isto facilitará as equipes de apoio de: hospedagem, traslado, acolhimento e organização.  <br><br>

                                <b>2o Passo:</b><br> Inscreva os membros da sua região no MENU ao lado esquerdo, clique em <b>"Convivências"</b>. Selecione a Convivência desejada e prossiga com as informações de viagem. As informações de viagem é de cada participante ou de cada casal, quando for o caso.

                                <br><br>

<b>Caso tenha alguma dúvida:</b><br>
1 - Sobre a utilização do Sistema de Inscrições de Convivências Nacionais entre em contato com Osmar - (61) 99837-9414 - cncbrasilia@gmail.com<br>
2 - Sobre acolhimentos e traslados entre em contato com a Graça: (61) 999976901 - cncbrasilia.graca@gmail.com <br>
3 - Sobre hospedagem entre em contato com a Odisséia: (61) 99814 -8562 casaconvivencias.sfn@gmail.com
                                

                                @endif 
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection