<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title','Kareem Portfolio')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        @if (app()->getLocale()=='ar')
        <style>
            body{
                direction: rtl;
            }
        </style>
            
        @endif
        @yield('css')
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    @isset($settings['site_name']) 
                    <a class="navbar-brand" href="{{ route('front.index') }}"><span class="fw-bolder text-primary">{{ $settings['site_name'] }}</span></a>
                    @else
                      <a class="navbar-brand" href="{{ route('front.index') }}"><span class="fw-bolder text-primary">Portfoilo</span></a>
                    @endisset
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav {{ app()->getLocale()=='ar'?'me-auto':'ms-auto' }} mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route('front.index') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('front.resume') }}">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('front.projects') }}">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('front.contact') }}">Contact</a></li>
                            @if (Auth::check() && Auth::user()->type=='admin')    
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>   
                            @endif
                            @auth()
                            <form id="form_logout" action="{{ route('logout') }}" method="POST">@csrf</form>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.querySelector('#form_logout').submit()">Logout</a>
                            </li>
                            @endauth
                            @guest()
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @endguest
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if($localeCode != app()->getLocale())
                <li class="nav-item"><a class="nav-link" href="{{LaravelLocalization::getLocalizedURL($localeCode, null, [], true)}}">{{ $properties['native'] }}</a></li>
                @endif
              @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
           @yield('content')
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    @isset($settings['site_name'])
                    <div class="col-auto"><div class="small m-0">Copyright &copy; {{ $settings['site_name'] }} 2026</div></div>
                    @else
                     <div class="col-auto"><div class="small m-0">Copyright &copy; Portfolio 2026</div></div>
                    @endisset
                    <div class="col-auto">
                        <a class="small" href="{{ route('front.contact') }}">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        @yield('js')
    </body>
</html>
