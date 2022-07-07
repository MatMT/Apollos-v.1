{{-- Nav bar provisional --}}
<br>
<nav>
    <ul>
        <li>
            <a href="/">Welcome</a>
        </li>
        {{-- Utilizamos esta directiva para mostrar a los usuarios no autenticados --}}
        @auth
            <li>
                <a href="{{ route('main') }}">Main</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="#" onclick="this.closest('form').submit()">Logout</a>
                </form>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
        @endauth
    </ul>
</nav>
