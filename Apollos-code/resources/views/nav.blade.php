@extends('home')

<!-- Una sección en sí y por defecto no se imprime y es por ello que las utilizamos como piezas para plasmar junto con una plantilla base-->

@section('Navbar')
{{-- NavBar preliminar --}}
<br>
<nav>
    <ul>
        <li>
            <a href="{{ route('login') }}">Login</a>
        </li>
        <li>
            <a href="{{ route('main') }}">Main</a>
        </li>
    </ul>
</nav>

@endsection
