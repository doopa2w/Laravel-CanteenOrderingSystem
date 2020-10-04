<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#74a6f7";>
<a class="navbar-brand" href="{{ route('staff.dashboard') }}">CanteenStaff</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse font-weight-bold" id="navbarCollapse">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
    @if (!Auth::guard('staff')->guest())
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/staff/orders') }}">Orders</a>
    </li>
    @endif
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Customer</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/manager') }}">Manager</a>
    </li>
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @if (Auth::guard('staff')->guest())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('staff.login') }}">{{ __('Login') }}</a>
            </li>
            {{-- @if (Route::has('staff.register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('staff.register') }}">{{ __('Register') }}</a>
                </li>
            @endif --}}
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::guard('staff')->user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('staff.logout') }}"
                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('staff.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>
</nav>