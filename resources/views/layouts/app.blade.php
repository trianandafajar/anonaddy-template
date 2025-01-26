<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#19216C">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('custom/css/app.css')}}" />
</head>
<body class="py-5 md:py-0">

        @include('layouts._particles._sidebar-mobile')
   
        @include('layouts._particles._topbar')
        <div class="flex overflow-hidden">

            @include('layouts._particles._sidebar')
           
            <div class="content" id="app" v-cloak>
                 @yield('content')
             
                @if(App\Helpers\GitVersionHelper::version())
                    <footer>
                        <div class=" py-1 text-sm text-grey-500 text-center"><a href="https://github.com/anonaddy/anonaddy/releases/tag/v{{ App\Helpers\GitVersionHelper::version() }}" target="_blank" rel="nofollow noreferrer noopener" class="block sm:inline">v{{ App\Helpers\GitVersionHelper::version() }}</a></div>
                    </footer>
                @endif
                <notifications position="bottom right" /> 
            </div>
        </div>
       
    <script src="{{asset('custom/js/app.js')}}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>