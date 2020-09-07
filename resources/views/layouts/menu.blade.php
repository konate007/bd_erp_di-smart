<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
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

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{{ route('services.index') }}"><i class="fa fa-edit"></i><span>Services</span></a>
</li>

<li class="{{ Request::is('planmaintenances*') ? 'active' : '' }}">
    <a href="{{ route('planmaintenances.index') }}"><i class="fa fa-edit"></i><span>Planmaintenances</span></a>
</li>

<li class="{{ Request::is('contrats*') ? 'active' : '' }}">
    <a href="{{ route('contrats.index') }}"><i class="fa fa-edit"></i><span>Contrats</span></a>
</li>

<li class="{{ Request::is('niveauImportances*') ? 'active' : '' }}">
    <a href="{{ route('niveauImportances.index') }}"><i class="fa fa-edit"></i><span>Niveau  Importances</span></a>
</li>

<li class="{{ Request::is('typeDemandes*') ? 'active' : '' }}">
    <a href="{{ route('typeDemandes.index') }}"><i class="fa fa-edit"></i><span>Type  Demandes</span></a>
</li>

<li class="{{ Request::is('departements*') ? 'active' : '' }}">
    <a href="{{ route('departements.index') }}"><i class="fa fa-edit"></i><span>Departements</span></a>
</li>

<li class="{{ Request::is('demandes*') ? 'active' : '' }}">
    <a href="{{ route('demandes.index') }}"><i class="fa fa-edit"></i><span>Demandes</span></a>
</li>

