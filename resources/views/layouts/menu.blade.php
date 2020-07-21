
<li class="{{ Request::is('my/profile*') ? 'active' : '' }}">
    <a href="{{ route('my.profile') }}"><i class="fa fa-home"></i><span>Menu Principal</span></a>
</li>

<li class="{{ Request::is('my/templates*') ? 'active' : '' }}">
    <a href="{{ route('my.resumes') }}"><i class="fa fa-file"></i><span>Mi Curriculum</span></a>
</li>

<li class="{{ Request::is('my/media*') ? 'active' : '' }}">
    <a href="{{ route('my.files') }}"><i class="fa fa-folder"></i><span>Mis Archivos</span></a>
</li>

<li class="{{ Request::is('payment*') ? 'active' : '' }}">
    <a href="{{ route('payment.index') }}"><i class="fa fa-shopping-cart"></i><span>Pago y Subscription</span></a>
</li>

<li class="{{ Request::is('tutorial') ? 'active' : '' }}">
    <a href="{{ route('tutorial') }}"><i class="fa fa-graduation-cap"></i><span>Guiá Inicial</span></a>
</li>

@role('Super')

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

<li class="{{ Request::is('files*') ? 'active' : '' }}">
    <a href="{{ route('files.index') }}"><i class="fa fa-edit"></i><span>Files</span></a>
</li>

@endrole





