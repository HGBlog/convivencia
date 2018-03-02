

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="row">
        <div class="content-header">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
            
            <div class="panel panel-default" >
                <div class="panel-heading">Seja bem vindo <b><?php echo e(Auth::user()->name); ?></b>!!!</div>
                    <div class="clearfix"></div>
                        <div class="content">
                            <div class="panel-body">
                                <?php if(Auth::user()->hasRole('usuario') | empty(Auth::user()->hasRole('admin')|Auth::user()->hasRole('responsavel'))): ?>
                                    Você acessou o Sistema como um usuário sem permissão para criação de Equipe e inscrição em Convivência. Aguarde a autorização do Centro Neocatecumenal de Brasília para em breve você receber o privilégio necessário no Sistema para realização das Inscrições em Convivência.
                                    Qualquer dúvida, mande um email para cncbrasilia@gmail.com informando esta mensagem de erro e solicitando autorização para ingresso ao Sistema de Convivências Nacionais.
                                <?php endif; ?>
                                <?php if(Auth::user()->hasRole('admin') | Auth::user()->hasAnyRole('responsavel')): ?>
                                    <div class="col-lg-3 col-xs-6">
                                              <!-- small box -->
                                              <div class="small-box bg-yellow">
                                                <div class="inner">
                                                  <h3><?php echo e(Membro::where('owner_id', auth()->user()->id)->count()); ?></h3>

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

                                <?php if(!empty ( $convivencia )): ?>
                                <font color="red">
                                <b>* <u>Próxima Convivência:</u> <?php echo $convivencia->no_nome; ?></b><br>
                                <b>* <u>Data:</u> <?php echo Carbon\Carbon::parse($convivencia->dt_inicio)->format('d/m/Y'); ?> a <?php echo Carbon\Carbon::parse($convivencia->dt_fim)->format('d/m/Y'); ?><br></b>
                                <b>* <u>Fim das inscrições:</u> <?php echo Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('d/m/Y'); ?></b><br>
                                <b>* <u>Local:</u> <?php echo $local->where('id', $convivencia->local_convivencia_id)->pluck('no_local')->first(); ?></b><br>                    
                                <a class="btn btn-primary pull-left" style="margin-top: 25px" href="<?php echo route('convivencias.lista_ativas'); ?>">Inscrições</a>
                                <br><br><br><br>
                                </font>
                                <?php else: ?>
                                <h2><font color="red">Não existem convivências com inscrições abertas</font></h2><br><br>
                                <?php endif; ?>



                                Seja bem vindo ao Sistema de Convivências Nacionais do Caminho Neocatecumenal no Brasil. Por intermédio deste Sistema, receberemos as inscrições de todas as Convivências Nacionais, com a informação de todos os membros da sua Equipe e os detalhes de acolhimento para melhor recebê-los nas Convivências. 
                                <br><br>
                                <b>..:: INSTRUÇÕES INICIAIS ::..</b> <br><br>
                                <b>1o Passo:</b><br> Comece cadastrando todos os membros da sua Equipe no MENU ao lado Esquerdo, clicando em "Membros Equipe". Tente preencher todos os campos para melhor identificar cada um. Isso nos ajudará no Acolhimento. <br><br>

                                <b>2o Passo:</b><br> Inscreva os membros da sua Equipe no MENU ao lado, clicando em "CONVIVÊNCIAS". Selecione a Convivência desejada e prossiga com o cadastro. O cadastro de acolhimento é individual e deve ser preenchido para cada membro ou casal da Equipe. 

                                <br><br>

                                Qualquer dúvida, entre em contato conosco através no email: carvalho.fabiano@gmail.com ou no telefone 61-991199497 (Whatsapp)
                                

                                <?php endif; ?> 
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>