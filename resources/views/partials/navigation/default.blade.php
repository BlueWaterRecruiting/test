<nav class="navbar is-fixed-top has-box-shadow" role="navigation" aria-label="main navigation" style="opacity:.98;">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{url('/')}}">
        <img src="{{asset('/images/logo.png')}}" alt="">
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item is-tab {{Route::is('services*') ? 'is-active' : ''}}" href="{{route('services')}}">
          Services
        </a>
        <a class="navbar-item is-tab {{Route::is('jobs*') ? 'is-active' : ''}}" href="{{route('jobs')}}">
          Jobs
        </a>
        <a class="navbar-item is-tab {{Route::is('about*') ? 'is-active' : ''}}" href="{{route('about')}}">
          About Us
        </a>
        <a class="navbar-item is-tab {{Route::is('contact*') ? 'is-active' : ''}}" href="{{route('contact')}}">
          Contact Us
        </a>

        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Portal
          </a>

          <div class="navbar-dropdown">
            <a class="navbar-item">
              Clients
            </a>
            <a class="navbar-item">
              Candidates
            </a>
            <a class="navbar-item">
              Account Manager
            </a>
          </div>
        </div>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="{{route('login')}}"class="button is-light">
              Log in
            </a>
            <a href="{{route('register')}}"class="button is-primary">
              <strong>Register</strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

{{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
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
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}}
