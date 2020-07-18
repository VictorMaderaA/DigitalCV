
<li class="{{ Request::is('my/profile*') ? 'active' : '' }}">
    <a href="{{ route('my.profile') }}"><i class="fa fa-edit"></i><span>Mi Perfil</span></a>
</li>

<li class="{{ Request::is('my/templates*') ? 'active' : '' }}">
    <a href="{{ route('my.resumes') }}"><i class="fa fa-edit"></i><span>Mi Curriculum</span></a>
</li>

<li class="{{ Request::is('my/media*') ? 'active' : '' }}">
    <a href="{{ route('my.media') }}"><i class="fa fa-edit"></i><span>Mis Archivos</span></a>
</li>

<li class="{{ Request::is('payment*') ? 'active' : '' }}">
    <a href="{{ route('payment.index') }}"><i class="fa fa-edit"></i><span>Pago y Subscripcion</span></a>
</li>

<li class="header">Administracion</li>

<li class="{{ Request::is('templates*') ? 'active' : '' }}">
    <a href="{{ route('templates.index') }}"><i class="fa fa-edit"></i><span>Templates</span></a>
</li>

<li class="{{ Request::is('templateViewHistories*') ? 'active' : '' }}">
    <a href="{{ route('templateViewHistories.index') }}"><i class="fa fa-edit"></i><span>Template View Histories</span></a>
</li>



<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
<li class="{{ Request::is('resumes*') ? 'active' : '' }}">
    <a href="{{ route('resumes.index') }}"><i class="fa fa-edit"></i><span>Resumes</span></a>
</li>

