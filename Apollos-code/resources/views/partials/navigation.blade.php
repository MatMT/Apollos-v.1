{{-- Nav bar provisional --}}
<br>
<nav>
    <ul>
        <li>
            <a href="{{ 'inicio' }}">Welcome</a>
        </li>
        {{-- Utilizamos esta directiva para mostrar a los usuarios no autenticados --}}
        @auth
            <li>
                <a href="{{ route('main') }}">Main</a>
            </li>
            <li>
                <a href="{{ route('main') }}">Logout</a>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
        @endauth
    </ul>
</nav>
