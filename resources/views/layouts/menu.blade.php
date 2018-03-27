<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Home</span></a>
</li>

@if(Auth::user()->hasRole('admin') | Auth::user()->hasRole('responsavel'))
<li class="{{ Request::is('membros*') ? 'active' : '' }}">
    <a href="{!! route('membros.index') !!}"><i class="fa fa-user"></i><span>Membros Equipe</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-blue">{{
            Membro::where('owner_id', auth()->user()->id)->count() +
            Membro::where('owner_id', auth()->user()->id)->where('no_conjuge','<>', '')->count() +
            Membro::where('mregiao_id', auth()->user()->mregiao_id)->where('owner_id','<>', auth()->user()->id)->count() +            
            Membro::where('mregiao_id', auth()->user()->mregiao_id)->where('owner_id','<>', auth()->user()->id)->where('no_conjuge','<>', '')->count()}}</small>
        </span>
    </a>

</li>
<li class="{{ Request::is('convivencias*') ? 'active' : '' }}">
    <a href="{!! route('convivencias.lista_ativas') !!}"><i class="fa fa-edit"></i><span>Convivências</span>
        <span class="pull-right-container">
                <small class="label pull-right bg-red">{{Convivencia::where('dt_fim_inscricao','>=', now())->where('is_ativo', true)->count()}}</small>
        </span>
    </a>
</li>
@endif
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
            <a href="{!! route('usuarios.index') !!}"><i class="fa fa-users"></i><span>Usuários, Macro-regiões</span></a>
        </li>
        <li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
            <a href="{!! url(config('backpack.base.route_prefix', 'admin') . '/user') !!}"><i class="fa fa-users"></i><span>Usuários, Permissões</span></a>
        </li>
  </ul>
</li>
@endif

@if(Auth::user()->hasRole('admin') | Auth::user()->hasRole('gestor_acolhida'))
<li class="treeview">
  <a href="#">
    <i class="fa fa-lock"></i> <span>RELATÓRIOS</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
        <li class="{{ Request::is('relatorioAcolhidas*') ? 'active' : '' }}">
            <a href="{!! route('relatorioAcolhidas.index') !!}"><i class="fa fa-edit"></i><span>Acolhidas - Completo</span></a>
        </li>
        <li class="{{ Request::is('relatorioAcolhidasChegada*') ? 'active' : '' }}">
            <a href="{!! route('relatorioAcolhidasChegada.index') !!}"><i class="fa fa-edit"></i><span>Acolhidas - Chegada</span></a>
        </li>
        <li class="{{ Request::is('relatorioAcolhidasTermino*') ? 'active' : '' }}">
            <a href="{!! route('relatorioAcolhidasTermino.index') !!}"><i class="fa fa-edit"></i><span>Acolhidas - Término</span></a>
        </li>
        <li class="{{ Request::is('relatorioTransladosChegada*') ? 'active' : '' }}">
            <a href="{!! route('relatorioTransladosChegada.index') !!}"><i class="fa fa-edit"></i><span>Translados - Chegada</span></a>
        </li>
        <li class="{{ Request::is('relatorioTransladosTermino*') ? 'active' : '' }}">
            <a href="{!! route('relatorioTransladosTermino.index') !!}"><i class="fa fa-edit"></i><span>Translados - Término</span></a>
        </li>
        <li class="{{ Request::is('relatorioInscricoes*') ? 'active' : '' }}">
            <a href="{!! route('relatorioInscricoes.index') !!}"><i class="fa fa-edit"></i><span>Inscrições Convivências</span></a>
        </li>
        <li class="{{ Request::is('relatorioMembros*') ? 'active' : '' }}">
            <a href="{!! route('relatorioMembros.index') !!}"><i class="fa fa-edit"></i><span>Membros Cadastrados</span></a>
        </li>
  </ul>
</li>
@endif

@if(Auth::user()->hasRole('admin'))
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
        <li class="{{ Request::is('macroRegiaos*') ? 'active' : '' }}">
            <a href="{!! route('macroRegiaos.index') !!}"><i class="fa fa-edit"></i><span>Macro- Regiões</span></a>
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
        
        <li class="{{ Request::is('estados*') ? 'active' : '' }}">
            <a href="{!! route('estados.index') !!}"><i class="fa fa-map"></i><span>Estados</span></a>
        </li>
  </ul>
</li>
@endif

