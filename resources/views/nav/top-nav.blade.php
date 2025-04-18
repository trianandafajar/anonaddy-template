@auth
<!-- Top Bar -->
<div x-data="{ mobileNavActive: false }" class="bg-white shadow p-4 flex justify-between items-center">
    <!-- Left (Logo or blank) -->
    <div class="flex items-center gap-4">
        <a href="{{ route('aliases.index') }}">
            <img class="h-6" alt="Logo" src="/svg/icon-logo.svg">
        </a>
        <button class="block md:hidden" @click="mobileNavActive = !mobileNavActive">
            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>

    <!-- Right (Upgrade + Dropdown) -->
    <div class="flex items-center gap-4">
        <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm hidden md:inline-block">Upgrade</span>
        <dropdown username="{{ user()->username }}">
            <ul>
                <li>
                    <a href="{{ route('settings.show') }}" class="block px-4 py-2 hover:bg-indigo-500 hover:text-white">Settings</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" class="w-full px-4 py-2 bg-transparent hover:bg-indigo-500 hover:text-white cursor-pointer text-left" value="{{ __('Logout') }}">
                    </form>
                </li>
            </ul>
        </dropdown>
    </div>
</div>

<!-- Navigation Menu -->
<nav class="bg-indigo-900 text-sm text-indigo-100 px-4 py-3 md:flex md:justify-between md:items-center" :class="mobileNavActive ? 'block' : 'hidden'" x-cloak>
    @php
        $navItems = [
            ['route' => 'aliases.index', 'label' => 'Aliases'],
            ['route' => 'recipients.index', 'label' => 'Recipients'],
            ['route' => 'domains.index', 'label' => 'Domains'],
            ['route' => 'usernames.index', 'label' => 'Usernames'],
            ['route' => 'failed_deliveries.index', 'label' => 'Failed Deliveries'],
            ['route' => 'rules.index', 'label' => 'Rules'],
        ];
    @endphp

    <div class="flex flex-col md:flex-row md:items-center gap-4">
        @foreach ($navItems as $item)
            <a href="{{ route($item['route']) }}"
                class="hover:text-white {{ Route::currentRouteNamed($item['route']) ? 'text-white' : 'text-indigo-100' }}">
                {{ $item['label'] }}
            </a>
        @endforeach
    </div>

    <!-- Mobile Settings & Logout (optional) -->
    <div class="block md:hidden mt-4">
        <a href="{{ route('settings.show') }}"
            class="block px-4 py-2 hover:text-white {{ Route::currentRouteNamed('settings.show') ? 'text-white' : 'text-indigo-100' }}">
            Settings
        </a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input type="submit"
                class="w-full px-4 py-2 bg-transparent hover:text-white cursor-pointer text-left"
                value="{{ __('Logout') }}">
        </form>
    </div>
</nav>
@endauth
