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

