<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}">Home</a>
</li>

<li class="{{ Request::is('membros*') ? 'active' : '' }}">
    <a href="{!! route('membros.index') !!}">Membros Equipe</a>

</li>

<li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
    <a href="{!! route('convivencias.lista_ativas') !!}">Inscrição Convivência</a>
</li>

<li>
	ADMINISTRAÇÃO
</li>
<li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
    <a href="{!! route('convivencias.index') !!}">Convivências</a>
</li>

<li class="{{ Request::is('tipoQuartos*') ? 'active' : '' }}">
    <a href="{!! route('tipoQuartos.index') !!}">Tipo de Quartos</a>
</li>

<li class="{{ Request::is('acolhidaExtras*') ? 'active' : '' }}">
    <a href="{!! route('acolhidaExtras.index') !!}">Acolhimento Extra</a>
</li>

<li class="{{ Request::is('etapas*') ? 'active' : '' }}">
    <a href="{!! route('etapas.index') !!}">Etapas</a>
</li>


<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}">Usuarios</a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}">Roles</a>
</li>

