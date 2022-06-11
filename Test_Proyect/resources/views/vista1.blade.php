<!-- Una sección en si y por defecto no se imprime 
y es por ello que las utilizamos como piezas para plasmar junto con una plantilla base-->

@extends('layouts.vistapadre')


@section('contenidoPrincipal')
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Tarjeta 1</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="btn btn-success">Go!</a>
    </div>
</div>

<ul>
    @for ($i = 0; $i <= 10; $i++) <li>El valor de $i = {{$i}}</li> @endfor
</ul>

@if (count($users)===1)
<span>Hay un solo elemento en el arrreglo</span>
@elseif (count($users) > 1)
<span>Hay muchos elementos en el arrreglo</span>
@else
<span>No hay un solo elemento en el arrreglo</span>
@endif

<ul>
    @foreach ($users as $user) <li>El nombre es = {{$user}}</li> @endforeach
</ul>

<br>


@endsection