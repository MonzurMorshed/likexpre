<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Likexpre') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/backend/assets/images/favicon.ico')}}">

    <link href="{{ asset('assets/backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <style>
        .lang a{
            padding: 20px !important;
            background: #fff;
        }
    </style>

</head>
<body>
    <div id="app" class="bg-primary">

        <div class="lang">

        <li class="nav-item dropdown" style="    margin-left: 20px;list-style: none;width:160px;padding-top: 20px;">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @php 
            $locale = App::getLocale(); 
            $arr = Config::get('languages');
           
            $getLocale = App::getLocale();
            echo 'Languages : '.$locale;
            
        @endphp
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">


    @foreach ($arr as $lang => $language)
        
        
                <a class="dropdown-item" href="{{ route('set.locale', $lang) }}"> 
                    {{$language['display']}}
                </a>
        
    @endforeach
    </div>
</li>

        </div>
        

      
        <main class="py-2">
            @yield('content')
        </main>
    </div>

    <!-- jQuery  -->
        <script src="{{ asset('assets/backend/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/metismenu.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/waves.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/backend/assets/js/app.js')}}"></script>
        <script>
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
      </script>
      <script src="{{ asset('assets/custom/js/auth.js')}}"></script>
    
</body>
</html>
