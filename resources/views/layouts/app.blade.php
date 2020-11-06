<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ assert('css/app.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @if(Auth()->user())
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li><span class="left-side-nav">{{ Auth()->user()->name }}</span></li>
                            <li><span class="left-side-nav">Your personal ID: {{ Auth()->user()->id }}</span></li>
                            <li><span class="left-side-nav">Role: {{ Auth()->user()->roles()->first()->name }}</span></li>
                        </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    <i class="mr-4 fa fa-sign-out"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    @if(Auth()->user())
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">Navigation</div>
                                <div class="card-body">
                                    <nav class="nav nav-pills flex-column">

                                      <a class="nav-link @yield('adverts')" href="{{ route('adverts') }}">Ads</a>
                                      @if(Auth()->user()->getRoleId() == config('access.roles.admin'))
                                            <a class="nav-link @yield('users')" href="{{ route('users') }}">Users</a>
                                      @endif
                                    </nav>
                                </div>
                            </div>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
// Add button functionality

        // document.querySelectorAll('button').forEach(button => {
        //     button.onclick = function() {
        //         action = this.dataset.action
        //
        //         if (action == 'getedit'){
        //             getFromEditSimpleTweet(this);
        //         }else{
        //             actionPost(this, action);
        //         }
        //
        //         // Check a dynamic form editable tweet
        //         checkDynamicForm()
        //         }
        //
        //     });
        //
        //     // Grid Config
        //     setCenterGridColumnHeight();
    });
    </script>
</body>
</html>
