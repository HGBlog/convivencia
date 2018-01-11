<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" >
                <div class="panel-heading">Seja bem vindo <b><?php echo e(Auth::user()->name); ?></b>!!!</div>


                <div class="panel-body">
                    <br>
                    Próxima Convivência:<br>
                    { $convivencia->no_nome }

                    <br>
                    Aqui colocaremos um quadro de avisos gerais e informações sobre as convivências que estão com as inscrições abertas e um link para inscrição em cada uma.

                    <br><br>

                    Por enquanto, acesse o MENU ao lado para mais opções...<br><br>

                    O responsável começa cadastrando os membros da sua Equipe e depois deve inscrevê-los ou não na Convivência.<br><br>
                    
                    Os MENUS de ADMINISTRAÇÃO serão acessados somente pelos Administradores do Sistema para criação de NOVAS CONVIVÊNCIAS e inclusão de novos Tipos de Quarto
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>