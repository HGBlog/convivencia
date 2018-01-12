<li class="<?php echo e(Request::is('home*') ? 'active' : ''); ?>">
   <a href="<?php echo url('/home'); ?>">Home</a>
</li>

<li class="<?php echo e(Request::is('membros*') ? 'active' : ''); ?>">
    <a href="<?php echo route('membros.index'); ?>">Membros Equipe</a>

</li>

<li class="<?php echo e(Request::is('convivencias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('convivencias.lista_ativas'); ?>">Inscrição Convivência</a>
</li>

<?php if(Auth::user()->hasRole('admin')): ?>
<li>
	<b>ADMINISTRAÇÃO</b>
</li>
<li class="<?php echo e(Request::is('convivencias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('convivencias.index'); ?>">Convivências</a>
</li>

<li class="<?php echo e(Request::is('tipoQuartos*') ? 'active' : ''); ?>">
    <a href="<?php echo route('tipoQuartos.index'); ?>">Tipo de Quartos</a>
</li>

<li class="<?php echo e(Request::is('acolhidaExtras*') ? 'active' : ''); ?>">
    <a href="<?php echo route('acolhidaExtras.index'); ?>">Acolhimento Extra</a>
</li>

<li class="<?php echo e(Request::is('etapas*') ? 'active' : ''); ?>">
    <a href="<?php echo route('etapas.index'); ?>">Etapas</a>
</li>


<li class="<?php echo e(Request::is('usuarios*') ? 'active' : ''); ?>">
    <a href="<?php echo route('usuarios.index'); ?>">Usuarios</a>
</li>

<li class="<?php echo e(Request::is('roles*') ? 'active' : ''); ?>">
    <a href="<?php echo route('roles.index'); ?>">Roles</a>
</li>
<li class="<?php echo e(Request::is('tipoCarismas*') ? 'active' : ''); ?>">
    <a href="<?php echo route('tipoCarismas.index'); ?>">TipoCarismas</a>
</li>
<?php endif; ?>;

<li class="<?php echo e(Request::is('tipoTranslados*') ? 'active' : ''); ?>">
    <a href="<?php echo route('tipoTranslados.index'); ?>">TipoTranslados</a>
</li>

