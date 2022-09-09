<nav x-data="{ open: false }" class="navbar bg-white border-b border-gray-100 d-flex">
    <!-- Primary Navigation Menu -->
        <div>
            <a class="rad" href="{{ route('home') }}">
                <img id="googl" class="img" src="https://www.freepnglogos.com/uploads/google-plus-png-logo/google-plus-blue-png-logo-10.png" alt="googl">
            </a>
        </div>
        @if (Route::has('login'))
            <div class="d-flex">
                @auth
                    <a href="{{ route('posts.create') }}" class="rad">Create post</a>
                    <form class="m-auto" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="rad" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        Log out
                    </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="rad">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rad">Register</a>
                    @endif
                @endauth
            </div>
        @endif

</nav>
