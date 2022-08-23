<ul class="flex mx-10 text-xl">
    <li class="mx-5 {{ $active ?? 'font-normal' }}"><a href="{{ route('home') }}">Home</a></li>
    <li class="mx-5"><a href="{{ route('biblioteca') }}">Tu Biblioteca</a></li>
    <li class="mx-5"><a href="">Crear PlayList</a></li>
    <li class="mx-5"><a href="{{ route('artista') }}">Artistas</a></li>
</ul>
