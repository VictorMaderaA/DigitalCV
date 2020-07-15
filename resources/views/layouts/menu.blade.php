<li class="{{ Request::is('templates*') ? 'active' : '' }}">
    <a href="{{ route('templates.index') }}"><i class="fa fa-edit"></i><span>Templates</span></a>
</li>

<li class="{{ Request::is('templateViewHistories*') ? 'active' : '' }}">
    <a href="{{ route('templateViewHistories.index') }}"><i class="fa fa-edit"></i><span>Template View Histories</span></a>
</li>

