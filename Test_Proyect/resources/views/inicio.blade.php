<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Login Prueba</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Righteous&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="background-animation-container">
      <div class="background-gradient"></div>
    </div>
  <form class="cont" method="POST">
  {{ csrf_field() }}
    <div class="form sign-in">
      <h2 class="logo">Apollo's</h2>
      <h2 class="Iniciar S">Iniciar sesion</h2>
      <label>
        <span>Email / Usuario</span>
        <input type="email", type="Usuario" />
      </label>
      <label>
        <span>Contraseña</span>
        <input type="Contraseña"/>
      </label>
      <p class="forgot-pass">¿Olvidaste contraseña?</p>

      <input type="submit" class="submit" value="Iniciar">
    </div>
    <div class="sub-cont">
      <div class="img">
        <div class="img__text m--up">
          <h2>¿Nuevo aqui?</h2>
          <p>Registrate para obtener la expercia completa de tu musica favorirta</p>
        </div>
        <div class="img__text m--in">
          <h2>¿Ya tienes cuenta?</h2>
          <p>Inicia sesion para poder comenzar la escuchar la musica que te encanta</p>
        </div>
        <div class="img__btn">
          <span class="m--up">Registrase</span>
          <span class="m--in">sesion</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Registrarse</h2>
        <label>
          <span>Nombre</span>
          <input type="Nombre" name="name"/>
        </label>
        <label>
          <span>Usuario</span>
          <input type="Usuario"  name="user" />
        </label>
        <label>
          <span>Email</span>
          <input type="email"  name="correo" />
        </label>
        <label>
          <span>Cotraseña</span>
          <input type="Contraseña" name="passware" />
        </label>
        <label>
          <span>Confirmar contraseña</span>
          <input type="C_Contraseña"  name="passware2" />
        </label>
        
        <input type="submit" class="submit" value="Registrarse">
      </div>
    </div>
</form>

  <!-- partial -->
    <script src="{{ asset('js/script.js') }}"></script>

  </body>
</html>
