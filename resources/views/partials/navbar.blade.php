<div class="container">
    <ul class="nav nav-tabs justify-content-center bg-dark text-white">
        <li class="nav-item">
            <a class="nav-link {{ !Route::currentRouteName() ? 'active' : '' }}" href="/">Welcome</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link {{ Route::currentRouteName() === 'users.index' ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
        </li>

    </ul>
</div>