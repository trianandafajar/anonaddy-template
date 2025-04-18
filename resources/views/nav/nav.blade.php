@auth
<aside class="bg-indigo-900 w-1/4 h-screen flex flex-col justify-between">
    <div class="py-4">
        @foreach ([
            'aliases.index' => 'Aliases',
            'recipients.index' => 'Recipients',
            'domains.index' => 'Domains',
            'usernames.index' => 'Usernames',
            'failed_deliveries.index' => 'Failed Deliveries',
            'rules.index' => 'Rules'
        ] as $route => $label)
            <a href="{{ route($route) }}" class="block px-6 py-3 text-white hover:bg-indigo-800">
                {{ $label }}
            </a>
        @endforeach
    </div>

    <div class="px-6 py-3">
        <button class="badge badge-success mb-4">Upgrade</button>

        <a href="{{ route('settings.show') }}" class="block text-white px-6 py-3 hover:bg-indigo-800">
            Settings
        </a>

        <form action="{{ route('logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="w-full px-6 py-3 text-left text-white hover:bg-indigo-800">
                {{ __('Logout') }}
            </button>
        </form>
    </div>
</aside>
@endauth
