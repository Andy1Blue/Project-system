<div>
    <ul class="nav bg-dark light">
        <li class="nav-item">
            <a class="nav-link font-weight-bold" href="/projects">PROJECT SYSTEM</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/projects">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/projects/create">Create new project</a>
        </li>

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
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    Hi, {{ Auth::user()->user }}!
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
        
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            @endguest

    </ul>
</div>