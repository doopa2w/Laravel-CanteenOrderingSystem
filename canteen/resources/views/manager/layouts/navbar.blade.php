<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#b467fc";>
        <a class="navbar-brand" href="{{ route('manager.dashboard') }}">CanteenManager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse font-weight-bold" id="navbarCollapse">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            @if (!Auth::guard('manager')->guest())
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/manager/foods') }}">Foods</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/manager/posts') }}">Posts</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Customer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/staff') }}">Staff</a>
            </li>
            </ul>
        
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if (Auth::guard('manager')->guest())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manager.login') }}">{{ __('Login') }}</a>
                    </li>
                    {{-- @if (Route::has('manager.register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manager.register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('manager')->user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('manager.logout') }}"
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('manager.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        </nav>