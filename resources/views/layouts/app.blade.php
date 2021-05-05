<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .isActive{
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm mt-1" data-toggle="modal" data-target="#exampleModal">
                                Preview Resume
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Preview</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="{{route('resume.index')}}" width="100%" height="900"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <a href="{{route('resume.download')}}" class="btn btn-success btn-sm">Download</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container">

            {{-- breadcrumb section  --}}
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item {{ request()->is('user-detail') ? 'isActive':''}}">
                            <a href="{{route('user-detail.index')}}">User Detail</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('education') ? 'isActive':''}}">
                            <a href="{{route('education.index')}}">Education</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('experience') ? 'isActive':''}}">
                            <a href="{{route('experience.index')}}">Work history</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('skill') ? 'isActive':''}}">
                            <a href="{{route('skill.index')}}">Skill</a>
                        </li>
                    </ol>
                </nav>
            </div>


            {{-- error message  --}}
            <div class="col-md-5 m-auto">
                @if (session()->has('errors'))

                    @foreach ($errors->all() as $e)
                        <div class="alert alert-danger">

                                {{$e}}

                        </div>
                    @endforeach

                @endif
                @if (session()->has('success'))
                <div class="alert alert-success">
                    <strong>{{}}</strong>
                </div>
                @endif
            </div>

            @yield('content')
        </main>
    </div>
</body>
</html>
