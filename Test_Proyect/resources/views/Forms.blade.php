<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <title>Formulario</title>
    <!-- Para linkear archivos como css y que el motor Blade lo compile debemos establecerlo con "{{asset('')}}" -->
    <link rel="stylesheet" href="{{asset('normalize.css')}}">
</head>

<body>
    <!-- Como definimos en la rutas, nuestro fomrulario al ser "accionado" enviara los datos mediante el método "Post"
    Por eso es importante definir las 2 rutas, o más bien los 2 métodos para ambas rutas.
    Así mismo en "action" colocamos este mismo archivo, será procesado por si mismo y no por otra página -->
    <form id="personal-data" method="POST">
        <h1 class="no-margin centrar-texto">Formulario</h1>
        <hr>
        <div id="datos_form">
            <!-- Debemos utlizar esta "etiqueta propia de Laravel, que es como un token de validación en tiempo real" 
            tengo entendido que es una medida de seguridad en formularios, un requisito, sin este da error -->
            {{ csrf_field() }}

            <div class="datos">
                <label for="NameType">Nombre</label>
                <br>
                <input type="text" name="NameType" placeholder=" Ingrese su nombre" class="nombre" id="NameType">
            </div>
            <div class="datos">
                <label for="EmailType">Email</label>
                <br>
                <input type="email" name="EmailType" placeholder=" email@example.com" class="nombre" id="EmailType">
            </div>
            <div class="datos">
                <label for="PassType">Contraseña</label>
                <br>
                <input type="password" name="PassType" placeholder=" contra123" id="PassType">
            </div>
            <div class="datos">
                <label for="PassType">Con firmar contraseña</label>
                <br>
                <input type="password" name="PassType" placeholder=" contra123" id="PassType">
            </div>
            <hr>
            <div id="botones">
                <input type="submit" value="Enviar" class="boton">
                <input type="reset" value="Borrar" class="boton">
            </div>
        </div>
    </form>
</body>

</html>