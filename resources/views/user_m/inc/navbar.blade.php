{{-- <nav class="navbar navbar-inverse shadow-lg navbar-static-top ">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/dashboard">Mess Management</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/food_request">Order food</a></li>
        <li><a href="/menu">Menu</a></li>
        <li><a href="/pay_bill">Pay Bill</a></li>
      </ul>
    </div>
  </nav> --}}


<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
              @guest
                    @if (Route::has('login'))
                        
                    @endif

                    @if (Route::has('register'))
                        
                    @endif
                @else
              {{-- <ul class="nav navbar-nav"> --}}
                {{-- <li><a href="/food_request">Order food</a></li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="/food_request">{{ __('Order food') }}</a>
                </li>
                {{-- <li><a href="/menu">Menu</a></li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="/menu">{{ __('Menu') }}</a>
                </li>
                {{-- <li><a href="/pay_bill">Pay Bill</a></li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="/pay_bill">{{ __('Pay Bill') }}</a>
                </li>
                @endguest
              </ul>
              
            {{-- </ul> --}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
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
                    {{-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/dashboard" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"> 
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
                                 @csrf 
                                 
                            </form>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                      <a class="nav-link" href="/dashboard" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>