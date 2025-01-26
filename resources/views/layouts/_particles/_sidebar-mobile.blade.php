@auth
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Anonaddy - Anonymous Email Forwarding" class="w-6" src="{{ asset('imgs/envelope.png') }}">
            <span class="logo__text text-white text-lg ml-3"> Anonaddy </span> 
        </a>
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <div class="scrollable">
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        <ul class="scrollable__content py-2">
            
       
        <li>
            <a href="{{ route('aliases.index') }}" class="menu{{ Route::is('aliases.index') ? ' menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="at-sign"></i> </div>
                <div class="menu__title"> Aliases </div>
            </a>
        </li>
        <li>
            <a href="{{ route('recipients.index') }}" class="menu{{ Route::is('recipients.index') ? ' menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="mail"></i> </div>
                <div class="menu__title"> Recipients </div>
            </a>
        </li>
        <li>
            <a href="{{ route('domains.index') }}" class="menu{{ Route::is('domains.index') ? ' menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="globe"></i> </div>
                <div class="menu__title"> Domains </div>
            </a>
        </li>
        <li>
            <a href="{{ route('usernames.index') }}" class="menu{{ Route::is('usernames.index') ? ' menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="user"></i> </div>
                <div class="menu__title"> Usernames </div>
            </a>
        </li>
        <li>
            <a href="{{ route('failed_deliveries.index') }}" class="menu{{ Route::is('failed_deliveries.index') ? ' menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="x-circle"></i> </div>
                <div class="menu__title">  Failed Deliveries </div>
            </a>
        </li>
        <li>
            <a href="{{ route('rules.index') }}" class="menu{{ Route::is('rules.index') ? ' menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="book"></i> </div>
                <div class="menu__title">  Rules </div>
            </a>
        </li>
        </ul>
    </div>
</div>
@endauth