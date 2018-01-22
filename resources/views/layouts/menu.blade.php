<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Home</span></a>
</li>

<li class="{{ Request::is('membros*') ? 'active' : '' }}">
    <a href="{!! route('membros.index') !!}"><i class="fa fa-user"></i><span>Membros Equipe</span></a>

</li>

<li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
    <a href="{!! route('convivencias.lista_ativas') !!}"><i class="fa fa-edit"></i><span>Inscrição Convivência</span></a>
</li>

@if(Auth::user()->hasRole('admin'))
<li>
    <font color="white"><b>ADMINISTRAÇÃO</b></font>
</li>
<li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
    <a href="{!! route('convivencias.index') !!}"><i class="fa fa-edit"></i><span>Convivências</span></a>
</li>
<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}"><i class="fa fa-users"></i><span>Usuários</span></a>
</li>
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-eye"></i><span>Roles</span></a>
</li>
<br>
    <font color="white"><b>TABELAS APOIO</b></font>
<li class="{{ Request::is('equipes*') ? 'active' : '' }}">
    <a href="{!! route('equipes.index') !!}"><i class="fa fa-users"></i><span>Equipes</span></a>
</li>
<li class="{{ Request::is('localConvivencias*') ? 'active' : '' }}">
    <a href="{!! route('localConvivencias.index') !!}"><i class="fa fa-home"></i><span>Local Convivência</span></a>
</li>
<li class="{{ Request::is('tipoQuartos*') ? 'active' : '' }}">
    <a href="{!! route('tipoQuartos.index') !!}"><i class="fa fa-edit"></i><span>Tipo de Quartos</span></a>
</li>

<li class="{{ Request::is('acolhidaExtras*') ? 'active' : '' }}">
    <a href="{!! route('acolhidaExtras.index') !!}"><i class="fa fa-edit"></i><span>Acolhimento Extra</span></a>
</li>

<li class="{{ Request::is('etapas*') ? 'active' : '' }}">
    <a href="{!! route('etapas.index') !!}"><i class="fa fa-edit"></i><span>Etapas</span></a>
</li>
<li class="{{ Request::is('tipoCarismas*') ? 'active' : '' }}">
    <a href="{!! route('tipoCarismas.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Carismas</span></a>
</li>
<li class="{{ Request::is('tipoTranslados*') ? 'active' : '' }}">
    <a href="{!! route('tipoTranslados.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Translados</span></a>
</li>
@endif




<li class="{{ Request::is('removerConvivencias*') ? 'active' : '' }}">
    <a href="{!! route('removerConvivencias.index') !!}"><i class="fa fa-edit"></i><span>Remover Convivencias</span></a>
</li>

<li class="{{ Request::is('removerConvivencias*') ? 'active' : '' }}">
    <a href="{!! route('removerConvivencias.index') !!}"><i class="fa fa-edit"></i><span>Remover Convivencias</span></a>
</li>

