@auth
<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('aliases.index') }}" class="side-menu{{ Route::is('aliases.index') ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="at-sign"></i> </div>
                <div class="side-menu__title"> Aliases </div>
            </a>
        </li>
        <li>
            <a href="{{ route('recipients.index') }}" class="side-menu{{ Route::is('recipients.index') ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="mail"></i> </div>
                <div class="side-menu__title"> Recipients </div>
            </a>
        </li>
        <li>
            <a href="{{ route('domains.index') }}" class="side-menu{{ Route::is('domains.index') ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="globe"></i> </div>
                <div class="side-menu__title"> Domains </div>
            </a>
        </li>
        <li>
            <a href="{{ route('usernames.index') }}" class="side-menu{{ Route::is('usernames.index') ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                <div class="side-menu__title"> Usernames </div>
            </a>
        </li>
        <li>
            <a href="{{ route('failed_deliveries.index') }}" class="side-menu{{ Route::is('failed_deliveries.index') ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="x-circle"></i> </div>
                <div class="side-menu__title">  Failed Deliveries </div>
            </a>
        </li>
        <li>
            <a href="{{ route('rules.index') }}" class="side-menu{{ Route::is('rules.index') ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="book"></i> </div>
                <div class="side-menu__title">  Rules </div>
            </a>
        </li>
    </ul>
</nav>
@endauth
