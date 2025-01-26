@auth
<aside class="bg-indigo-900 w-1/4 h-screen">
    <div class="py-4">
        <a href="{{ route('aliases.index') }}" class="block px-6 py-3 text-white hover:bg-indigo-800">
            Aliases
        </a>
        <a href="{{ route('recipients.index') }}" class="block px-6 py-3 text-white hover:bg-indigo-800">
            Recipients
        </a>
        <a href="{{ route('domains.index') }}" class="block px-6 py-3 text-white hover:bg-indigo-800">
            Domains
        </a>
        <a href="{{ route('usernames.index') }}" class="block px-6 py-3 text-white hover:bg-indigo-800">
            Usernames
        </a>
        <a href="{{ route('failed_deliveries.index') }}" class="block px-6 py-3 text-white hover:bg-indigo-800">
            Failed Deliveries
        </a>
        <a href="{{ route('rules.index') }}" class="block px-6 py-3 text-white hover:bg-indigo-800">
            Rules
        </a>
    </div>
    <div class="px-6 py-3 mt-auto">
        <button class="badge badge-success">Upgrade</button>
    </div>
    <div class="px-6 py-3">
        <a href="{{ route('settings.show') }}" class="block text-white hover:bg-indigo-800">
            Settings
        </a>
        <form action="{{ route('logout') }}" method="POST" class="block mt-3">
            {{ csrf_field() }}
            <input type="submit" class="w-full px-6 py-3 bg-transparent text-white hover:bg-indigo-800 cursor-pointer" value="{{ __('Logout') }}">
        </form>
    </div>
</aside>

@endauth