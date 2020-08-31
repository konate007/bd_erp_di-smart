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

