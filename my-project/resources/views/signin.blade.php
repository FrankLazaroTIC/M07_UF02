<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sing In</title>
    </head>
  <body>
    <h1><strong>Inicar sessió de l'usuari </strong></h1>
        <form action="{{ route('loginUsers') }}" method="POST">
            <div>
                <label>Email</label><br>
                <input type="email" id="email" name="email"><br>
            </div>
            <div>
                <label>Contrassenya</label><br>
                <input type="password" id="contrassenya" name="contrassenya"><br>
            </div>
            <input type="submit" value="Submit">
        </form>
        <a href="{{ route('register') }}">Crear usuari</a>
  </body>
</html>