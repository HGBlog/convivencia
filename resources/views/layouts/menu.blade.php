<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}">Home</a>
</li>

<li class="{{ Request::is('etapas*') ? 'active' : '' }}">
    <a href="{!! route('etapas.index') !!}">Etapas</a>
</li>

<li class="{{ Request::is('membros*') ? 'active' : '' }}">
    <a href="{!! route('membros.index') !!}">Membros Equipe</a>

</li><li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
    <a href="{!! route('convivencias.index') !!}">Convivencias</a>
</li>



<li class="{{ Request::is('convivenciaMembros*') ? 'active' : '' }}">
    <a href="{!! route('convivenciaMembros.index') !!}">ConvivenciaMembros</a>
</li>

