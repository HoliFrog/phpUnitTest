<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li>Dons Campus</li>
            <li class="active"><a href="/home">Home</a></li>
            <li><a href="/Projects">Project</a></li>
            @if ( Auth::user() &&  Auth::user()->role == 'admin')
                <li><a href="/project">Project</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="/3">News</a></li>
        </ul>
        @endif
        {{-- ici on verifie avec le if si Auth::user() existe et si il a un role d'admin.
        dans ce cas les liens sont ouverts à defaut il n'y aura que le lien Home et ventes de visible --}}

        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <a class="dropdown-item" href="{{ route('userInfo') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('user-form').submit();">
                            {{ __('My Profil') }}
                        </a>
                        <form id="user-form" action="{{ route('userInfo') }}" method="GET" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
    @endguest
    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </div>
</nav>