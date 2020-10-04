<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#f4b153";>
    <a class="navbar-brand" href="{{ url('/')}}">Canteen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse font-weight-bold" id="navbarCollapse">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/orders') }}">Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/foods') }}">Foods</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/posts') }}">News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/staff') }}">Staff</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/manager') }}">Manager</a>
        </li>
        </ul>
    
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @if (Auth::guard('customer')->guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('customer.register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::guard('customer')->user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('customer.logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    </nav>

    {{-- <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search users"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form> --}}