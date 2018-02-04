<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Home</span></a>
</li>

<li class="{{ Request::is('membros*') ? 'active' : '' }}">
    <a href="{!! route('membros.index') !!}"><i class="fa fa-user"></i><span>Membros Equipe</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-blue">{{Membro::where('owner_id', auth()->user()->id)->count()}}</small>
        </span>
    </a>

</li>

<li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
    <a href="{!! route('convivencias.lista_ativas') !!}"><i class="fa fa-edit"></i><span>Convivências</span>
        <span class="pull-right-container">
                <small class="label pull-right bg-red">{{Convivencia::where('is_ativo', true)->count()}}</small>
        </span>
    </a>
</li>
<br>
@if(Auth::user()->hasRole('admin'))
<li class="treeview">
  <a href="#">
    <i class="fa fa-lock"></i> <span>ADMINISTRAÇÃO</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
        <li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
            <a href="{!! route('convivencias.index') !!}"><i class="fa fa-edit"></i><span>Convivências</span></a>
        </li>
        <li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
            <a href="{!! url(config('backpack.base.route_prefix', 'admin') . '/user') !!}"><i class="fa fa-users"></i><span>Usuários, Permissões</span></a>
        </li>
  </ul>
</li>

<li class="treeview">
  <a href="#">
    <i class="fa fa-lock"></i> <span>TABELAS APOIO</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
        <li class="{{ Request::is('dioceses*') ? 'active' : '' }}">
            <a href="{!! route('dioceses.index') !!}"><i class="fa fa-edit"></i><span>Dioceses</span></a>
        </li>
        <li class="{{ Request::is('equipes*') ? 'active' : '' }}">
            <a href="{!! route('equipes.index') !!}"><i class="fa fa-users"></i><span>Equipes</span></a>
        </li>
        <li class="{{ Request::is('localConvivencias*') ? 'active' : '' }}">
            <a href="{!! route('localConvivencias.index') !!}"><i class="fa fa-home"></i><span>Local Convivência</span></a>
        </li>
        <li class="{{ Request::is('tipoQuartos*') ? 'active' : '' }}">
            <a href="{!! route('tipoQuartos.index') !!}"><i class="fa fa-bed"></i><span>Tipo de Quartos</span></a>
        </li>

        <li class="{{ Request::is('acolhidaExtras*') ? 'active' : '' }}">
            <a href="{!! route('acolhidaExtras.index') !!}"><i class="fa fa-plane"></i><span>Acolhimento Extra</span></a>
        </li>

        <li class="{{ Request::is('etapas*') ? 'active' : '' }}">
            <a href="{!! route('etapas.index') !!}"><i class="fa fa-play-circle"></i><span>Etapas</span></a>
        </li>
        <li class="{{ Request::is('tipoCarismas*') ? 'active' : '' }}">
            <a href="{!! route('tipoCarismas.index') !!}"><i class="fa fa-list-alt"></i><span>Tipos de Carismas</span></a>
        </li>
        <li class="{{ Request::is('tipoTranslados*') ? 'active' : '' }}">
            <a href="{!! route('tipoTranslados.index') !!}"><i class="fa fa-car"></i><span>Tipos de Translados</span></a>
        </li>
  </ul>
</li>
@endif

