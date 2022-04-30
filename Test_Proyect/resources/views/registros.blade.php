<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Datos registrados</h1>
        <br>
    <div class="panel panel-default">
      <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Edad</th>
              <th>País</th>
              <th>Número</th>
              <th>Email</th>
              <th>Profesión</th>
            </tr>
          </thead>

          <tbody>
            <!-- Se utiliza una función propia del motor blade para
            recorrer nuestro arreglo obtenido de la base de datos -->
            @foreach ($userregist as $user)
                <tr>
                  <!-- Se indica "el indice" o columna que se va a extraer -->
                    <td>{{ $user->ID }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->country }}</td>
                    <td>{{ $user->telephone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->career }}</td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
</body>
</html>
