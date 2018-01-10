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

<li class="{{ Request::is('tipoQuartos*') ? 'active' : '' }}">
    <a href="{!! route('tipoQuartos.index') !!}">TipoQuartos</a>
</li>

<li class="{{ Request::is('acolhidaExtras*') ? 'active' : '' }}">
    <a href="{!! route('acolhidaExtras.index') !!}">AcolhidaExtras</a>
</li>

<li class="{{ Request::is('acolhidas*') ? 'active' : '' }}">
    <a href="{!! route('acolhidas.index') !!}">Acolhidas</a>
</li>

<li class="{{ Request::is('acolhidas*') ? 'active' : '' }}">
    <a href="{!! route('acolhidas.index') !!}">Acolhidas</a>
</li>

