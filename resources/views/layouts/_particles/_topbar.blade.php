@auth
<div class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
            <img alt="Anonaddy - Anonymous Email Forwarding" class="logo__image w-6" src="{{ asset('imgs/envelope.png') }}">
            <span class="logo__text text-white text-lg ml-3"> Anonaddy </span> 
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
            <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item"><a href="">Application</a></li>
                <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb')</li>
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6">
            <div class="search hidden sm:block">
                <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                <i data-lucide="search" class="search__icon dark:text-slate-500"></i> 
            </div>
           
        </div>
        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown mr-4 sm:mr-6">
            <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Anonaddy - Anonymous Email Forwarding" src="{{asset('custom/images/profile-6.jpg')}}">
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ user()->username }}</div>
                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Manage Account</div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    
                    <li>
                        <a href="{{ route('settings.show') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="gift" class="w-4 h-4 mr-2"></i> upgrade </a>
                    </li>
                    
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item hover:bg-white/5">
                            @csrf
                            <button type="submit" class="flex items-center">
                                <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                            </button>
                        </form>
                    </li>


                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
@endauth