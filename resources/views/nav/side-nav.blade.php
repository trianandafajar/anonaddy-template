@auth
<div class="block md:hidden" id="burger-icon">
    <button @click="mobileNavActive = !mobileNavActive" class="flex items-center px-2 py-1 border rounded text-indigo-200 border-indigo-400  focus:outline-none">
    <svg class="fill-current h-4 w-4"  :class="mobileNavActive ? 'hidden' : 'block'"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        <svg class="fill-current h-4 w-4"  :class="mobileNavActive ? 'block' : 'hidden'"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path d="M14.35 14.35a1 1 0 0 1-1.41 0L10 11.41l-2.94 2.94a1 1 0 1 1-1.41-1.41L8.59 10 5.65 7.06a1 1 0 1 1 1.41-1.41L10 8.59l2.94-2.94a1 1 0 0 1 1.41 1.41L11.41 10l2.94 2.94a1 1 0 0 1 0 1.41z"/>
        </svg>
    </button>
</div>
<nav class="side-nav pb-4 md:flex md:items-center md:w-auto"  :class="mobileNavActive ? 'block' : 'hidden'" >
    <div class=" flex flex-col items-center justify-between">
      
        <div class="w-full">
            <a href="{{ route('aliases.index') }}" class="side-nav-hd block mt-2 hover:text-black mr-4 {{ Route::currentRouteNamed('aliases.index') ? 'text-black' : 'text-indigo-100' }}">
                <img src="{{ asset('imgs/envelope_blue.png') }}" class="inline "  alt="icon">  Aliases
              </a>
            <div class="text-base"> 
                <a href="{{ route('aliases.index') }}" class="side-nav-link link-active block mt-4 hover:text-black mr-4 {{ Route::currentRouteNamed('aliases.index') ? 'text-black' : 'text-indigo-100' }}">
                  <img src="{{ asset('imgs/envelope.png') }}" class="inline "  alt="icon">  Aliases
                </a>
                <a href="{{ route('recipients.index') }}" class="side-nav-link block mt-4 hover:text-black mr-4 {{ Route::currentRouteNamed('recipients.index') ? 'text-black' : 'text-indigo-100' }}">
                    <img src="{{ asset('imgs/download-dark.png') }}" class="inline "  alt="icon"> Recipients
                </a>
                <a href="{{ route('domains.index') }}" class="side-nav-link block mt-4 hover:text-black mr-4 {{ Route::currentRouteNamed('domains.index') ? 'text-black' : 'text-indigo-100' }}">
                    <img src="{{ asset('imgs/globe-dark.png') }}" class="inline "  alt="icon">  Domains
                </a>
                <a href="{{ route('usernames.index') }}" class="side-nav-link block mt-4 hover:text-black mr-4 {{ Route::currentRouteNamed('usernames.index') ? 'text-black' : 'text-indigo-100' }}">
                    <img src="{{ asset('imgs/user-dark.png') }}" class="inline "  alt="icon"> Usernames
                </a>
                <a href="{{ route('failed_deliveries.index') }}" class="side-nav-link block mt-4 hover:text-black mr-4 {{ Route::currentRouteNamed('failed_deliveries.index') ? 'text-black' : 'text-indigo-100' }}">
                    <img src="{{ asset('imgs/delete-dark.png') }}" class="inline "  alt="icon"> Failed Deliveries
                </a>
                {{-- <a href="{{ route('rules.index') }}" class="side-nav-link block mt-4 hover:text-black mr-4 {{ Route::currentRouteNamed('rules.index') ? 'text-black' : 'text-indigo-100' }}">
                    <img src="{{ asset('imgs/') }}" class="inline"  alt="icon"> Rules
                </a> --}}
            </div>
            {{-- <div class="mt-6">
                <a href="{{ route('settings.show') }}" class="side-nav-link block hover:text-black mr-4 {{ Route::currentRouteNamed('settings.show') ? 'text-white' : 'text-indigo-100' }}">
                    <img src="{{ asset('imgs/') }}"  alt="icon"> Settings
                </a>
                <form action="{{ route('logout') }}" method="POST" class="bloc.k">
                    {{ csrf_field() }}
                    <input type="submit" class="bg-transparent bloc.k text-indigo-100 mt-4 hover:text-black mr-4 cursor-pointer" value="{{ __('Logout') }}">
                </form>
            </div> --}}
        </div>
    </div>
</nav>


  
@endauth