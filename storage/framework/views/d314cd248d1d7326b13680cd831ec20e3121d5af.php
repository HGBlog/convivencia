<li class="<?php echo e(Request::is('home*') ? 'active' : ''); ?>">
   <a href="<?php echo url('/home'); ?>">Home</a>
</li>

<li class="<?php echo e(Request::is('etapas*') ? 'active' : ''); ?>">
    <a href="<?php echo route('etapas.index'); ?>">Etapas</a>
</li>

<li class="<?php echo e(Request::is('membros*') ? 'active' : ''); ?>">
    <a href="<?php echo route('membros.index'); ?>">Membros Equipe</a>

</li><li class="<?php echo e(Request::is('convivencias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('convivencias.index'); ?>">Convivencias</a>
</li>



<li class="<?php echo e(Request::is('convivenciaMembros*') ? 'active' : ''); ?>">
    <a href="<?php echo route('convivenciaMembros.index'); ?>">ConvivenciaMembros</a>
</li>

<li class="<?php echo e(Request::is('tipoQuartos*') ? 'active' : ''); ?>">
    <a href="<?php echo route('tipoQuartos.index'); ?>">TipoQuartos</a>
</li>

<li class="<?php echo e(Request::is('acolhidaExtras*') ? 'active' : ''); ?>">
    <a href="<?php echo route('acolhidaExtras.index'); ?>">AcolhidaExtras</a>
</li>

<li class="<?php echo e(Request::is('acolhidas*') ? 'active' : ''); ?>">
    <a href="<?php echo route('acolhidas.index'); ?>">Acolhidas</a>
</li>

<li class="<?php echo e(Request::is('acolhidas*') ? 'active' : ''); ?>">
    <a href="<?php echo route('acolhidas.index'); ?>">Acolhidas</a>
</li>

