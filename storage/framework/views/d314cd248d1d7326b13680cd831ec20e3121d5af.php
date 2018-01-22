<li class="<?php echo e(Request::is('home*') ? 'active' : ''); ?>">
   <a href="<?php echo url('/home'); ?>"><i class="fa fa-home"></i><span>Home</span></a>
</li>

<li class="<?php echo e(Request::is('membros*') ? 'active' : ''); ?>">
    <a href="<?php echo route('membros.index'); ?>"><i class="fa fa-user"></i><span>Membros Equipe</span></a>

</li>

<li class="<?php echo e(Request::is('convivencias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('convivencias.lista_ativas'); ?>"><i class="fa fa-edit"></i><span>Inscrição Convivência</span></a>
</li>
<br>
<?php if(Auth::user()->hasRole('admin')): ?>
<li class="treeview">
  <a href="#">
    <i class="fa fa-list-alt"></i> <span>ADMINISTRAÇÃO</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
        <li class="<?php echo e(Request::is('convivencias*') ? 'active' : ''); ?>">
            <a href="<?php echo route('convivencias.index'); ?>"><i class="fa fa-edit"></i><span>Convivências</span></a>
        </li>
        <li class="<?php echo e(Request::is('usuarios*') ? 'active' : ''); ?>">
            <a href="<?php echo route('usuarios.index'); ?>"><i class="fa fa-users"></i><span>Usuários</span></a>
        </li>
        <li class="<?php echo e(Request::is('roles*') ? 'active' : ''); ?>">
            <a href="<?php echo route('roles.index'); ?>"><i class="fa fa-eye"></i><span>Roles</span></a>
        </li>
  </ul>
</li>

<li class="treeview">
  <a href="#">
    <i class="fa fa-list-alt"></i> <span>TABELAS APOIO</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
        <li class="<?php echo e(Request::is('equipes*') ? 'active' : ''); ?>">
            <a href="<?php echo route('equipes.index'); ?>"><i class="fa fa-users"></i><span>Equipes</span></a>
        </li>
        <li class="<?php echo e(Request::is('localConvivencias*') ? 'active' : ''); ?>">
            <a href="<?php echo route('localConvivencias.index'); ?>"><i class="fa fa-home"></i><span>Local Convivência</span></a>
        </li>
        <li class="<?php echo e(Request::is('tipoQuartos*') ? 'active' : ''); ?>">
            <a href="<?php echo route('tipoQuartos.index'); ?>"><i class="fa fa-bed"></i><span>Tipo de Quartos</span></a>
        </li>

        <li class="<?php echo e(Request::is('acolhidaExtras*') ? 'active' : ''); ?>">
            <a href="<?php echo route('acolhidaExtras.index'); ?>"><i class="fa fa-plane"></i><span>Acolhimento Extra</span></a>
        </li>

        <li class="<?php echo e(Request::is('etapas*') ? 'active' : ''); ?>">
            <a href="<?php echo route('etapas.index'); ?>"><i class="fa fa-play-circle"></i><span>Etapas</span></a>
        </li>
        <li class="<?php echo e(Request::is('tipoCarismas*') ? 'active' : ''); ?>">
            <a href="<?php echo route('tipoCarismas.index'); ?>"><i class="fa fa-list-alt"></i><span>Tipos de Carismas</span></a>
        </li>
        <li class="<?php echo e(Request::is('tipoTranslados*') ? 'active' : ''); ?>">
            <a href="<?php echo route('tipoTranslados.index'); ?>"><i class="fa fa-car"></i><span>Tipos de Translados</span></a>
        </li>
  </ul>
</li>
<?php endif; ?>