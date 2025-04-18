@auth
<!-- Mobile Burger Icon -->
<div class="block md:hidden px-4 py-2" x-data="{ mobileNavActive: false }">
    <button @click="mobileNavActive = !mobileNavActive"
        class="flex items-center px-2 py-1 border rounded text-indigo-200 border-indigo-400 focus:outline-none">
        <!-- Menu Icon -->
        <svg class="fill-current h-4 w-4" :class="mobileNavActive ? 'hidden' : 'block'" viewBox="0 0 20 20">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
        <!-- Close Icon -->
        <svg class="fill-current h-4 w-4" :class="mobileNavActive ? 'block' : 'hidden'" viewBox="0 0 20 20">
            <title>Close</title>
            <path
                d="M14.35 14.35a1 1 0 0 1-1.41 0L10 11.41l-2.94 2.94a1 1 0 1 1-1.41-1.41L8.59 10 5.65 7.06a1 1 0 1 1 1.41-1.41L10 8.59l2.94-2.94a1 1 0 0 1 1.41 1.41L11.41 10l2.94 2.94a1 1 0 0 1 0 1.41z" />
        </svg>
    </button>
</div>

<!-- Sidebar Navigation -->
<nav class="side-nav md:flex md:items-start md:w-auto px-4" :class="mobileNavActive ? 'block' : 'hidden'" x-cloak>
    <div class="flex flex-col gap-4">
        @php
            $items = [
                ['route' => 'aliases.index', 'label' => 'Aliases', 'icon' => 'envelope.png'],
                ['route' => 'recipients.index', 'label' => 'Recipients', 'icon' => 'download-dark.png'],
                ['route' => 'domains.index', 'label' => 'Domains', 'icon' => 'globe-dark.png'],
                ['route' => 'usernames.index', 'label' => 'Usernames', 'icon' => 'user-dark.png'],
                ['route' => 'failed_deliveries.index', 'label' => 'Failed Deliveries', 'icon' => 'delete-dark.png'],
                // ['route' => 'rules.index', 'label' => 'Rules', 'icon' => 'rules.png'],
            ];
        @endphp

        @foreach ($items as $item)
            <a href="{{ route($item['route']) }}"
                class="flex items-center gap-2 mt-2 hover:text-black text-sm {{ Route::currentRouteNamed($item['route']) ? 'text-black' : 'text-indigo-100' }}">
                <img src="{{ asset('imgs/' . $item['icon']) }}" class="h-4 w-4 inline" alt="icon">
                {{ $item['label'] }}
            </a>
        @endforeach

        {{-- Optional: Settings and Logout --}}
        <a href="{{ route('settings.show') }}"
            class="flex items-center gap-2 mt-4 hover:text-black text-sm {{ Route::currentRouteNamed('settings.show') ? 'text-white' : 'text-indigo-100' }}">
            <img src="{{ asset('imgs/settings.png') }}" class="h-4 w-4 inline" alt="Settings">
            Settings
        </a>

        <form action="{{ route('logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit"
                class="w-full text-left text-indigo-100 hover:text-black text-sm">
                {{ __('Logout') }}
            </button>
        </form>
    </div>
</nav>
@endauth
