
      
       


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
                  <ul class="navbar-nav mr-auto">
                    <li >
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/about">About</a>
                     
                    </li>
                    <li class="nav-item">
        
                        <a class="nav-link" href="/services">services</a>
                     </li>
        
                     <li class="nav-item">
        
                        <a class="nav-link" href="/posts">blog</a>
                     </li>
        
                     <li class="nav-item">
        
                        <a class="nav-link" href="/register">registration</a>
                     </li>
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
                        <div class="nav-item">
                            @if (Auth::user()->profile_photo != null)
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="/uploads/profile_photos/{{Auth::user()->profile_photo}}" style="width:32px;height:32px;postion:absolute;top:10px; left:10px; border-radius:50%" >
                                </a>
                            @else
                                <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="/uploads/profile_photos/default.png" style="width:32px;height:32px;postion:absolute;top:10px; left:10px; border-radius:50%" >
                                </a>
                            @endif
                            </div>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50%">
                                <span class="caret">
                                    {{ Auth::user()->name }}
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ url('profile') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('profile-form').submit();">
                                 {{ __('profile') }}
                             </a>
                              

                                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <form id="profile-form" action="{{ url('profile') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

      