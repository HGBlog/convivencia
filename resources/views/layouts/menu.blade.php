<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}">Home</a>
</li>

<li class="{{ Request::is('membros*') ? 'active' : '' }}">
    <a href="{!! route('membros.index') !!}">Membros Equipe</a>

</li>

<li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
    <a href="{!! route('convivencias.lista_ativas') !!}">Inscrição Convivência</a>
</li>

@if(Auth::user()->hasRole('admin'))
<li>
	<b>ADMINISTRAÇÃO</b>
</li>
<li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
    <a href="{!! route('convivencias.index') !!}">Convivências</a>
</li>
<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}">Usuarios</a>
</li>
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}">Roles</a>
</li>
<br>
<li class="{{ Request::is('tipoQuartos*') ? 'active' : '' }}">
    <a href="{!! route('tipoQuartos.index') !!}">Tipo de Quartos</a>
</li>

<li class="{{ Request::is('acolhidaExtras*') ? 'active' : '' }}">
    <a href="{!! route('acolhidaExtras.index') !!}">Acolhimento Extra</a>
</li>

<li class="{{ Request::is('etapas*') ? 'active' : '' }}">
    <a href="{!! route('etapas.index') !!}">Etapas</a>
</li>
<li class="{{ Request::is('tipoCarismas*') ? 'active' : '' }}">
    <a href="{!! route('tipoCarismas.index') !!}">Tipos de Carismas</a>
</li>
<li class="{{ Request::is('tipoTranslados*') ? 'active' : '' }}">
    <a href="{!! route('tipoTranslados.index') !!}">Tipos de Translados</a>
</li>
<li class="{{ Request::is('equipes*') ? 'active' : '' }}">
    <a href="{!! route('equipes.index') !!}">Equipes</a>
</li>
@endif<li class="{{ Request::is('localConvivencias*') ? 'active' : '' }}">
    <a href="{!! route('localConvivencias.index') !!}">LocalConvivencias</a>
</li>

