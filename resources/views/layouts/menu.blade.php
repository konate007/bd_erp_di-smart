<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Paramètres
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ Request::is('planmaintenances*') ? 'active' : '' }}">
                <a href="{{ route('planmaintenances.index') }}"><i class="far fa-circle nav-icon"></i><span>Plans de maintenance</span></a>
              </li>
              <li class="nav-item {{ Request::is('departements*') ? 'active' : '' }}">
                <a href="{{ route('departements.index') }}"><i class="far fa-circle nav-icon"></i><span>Departements</span></a>
              </li>
              <li class="nav-item {{ Request::is('niveauImportances*') ? 'active' : '' }}">
                <a href="{{ route('niveauImportances.index') }}"><i class="far fa-circle nav-icon"></i><span>Niveaux  d'importance</span></a>
              </li>
              <li class="nav-item {{ Request::is('typeDemandes*') ? 'active' : '' }}">
                <a href="{{ route('typeDemandes.index') }}"><i class="far fa-circle nav-icon"></i><span>Type  Demandes</span></a>
              </li>
              <li class=" nav-item {{ Request::is('roles*') ? 'active' : '' }}">
                 <a href="{{ route('roles.index') }}"><i class="far fa-circle nav-icon"></i><span>Roles</span></a>
              </li>
              <li class="nav-item {{ Request::is('services*') ? 'active' : '' }}">
                <a href="{{ route('services.index') }}"><i class="far fa-circle nav-icon"></i><span>Services</span></a>
              </li>
              
            </ul>
    </li>
</ul>
<li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.index') }}"><i class="fa fa-edit"></i><span>Tableau de bord</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('projets*') ? 'active' : '' }}">
    <a href="{{ route('projets.index') }}"><i class="fa fa-edit"></i><span>Projets</span></a>
</li>

<li class="{{ Request::is('projetUsers*') ? 'active' : '' }}">
    <a href="{{ route('projetUsers.index') }}"><i class="fa fa-edit"></i><span>Projet  Users</span></a>
</li>

<li class="{{ Request::is('contrats*') ? 'active' : '' }}">
    <a href="{{ route('contrats.index') }}"><i class="fa fa-edit"></i><span>Contrats</span></a>
</li>

<li class="{{ Request::is('demandes*') ? 'active' : '' }}">
    <a href="{{ route('demandes.index') }}"><i class="fa fa-edit"></i><span>Demandes</span></a>
</li>

