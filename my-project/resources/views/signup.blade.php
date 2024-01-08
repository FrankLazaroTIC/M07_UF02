<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sing Up</title>
    </head>
  <body>
    <h1><strong>Crear un usuari</strong></h1>
        <form action="{{ route('register') }}" method="POST">
            <div>
                <label>Nom</label><br>
                <input type="text" name="nom">
            </div>
            <div>
                <label>Cognom</label><br>
                <input type="text" name="cognoms">
            </div>
            <div>
                <label>Contrasenya</label><br>
                <input type="password" name="contrassenya" >
            </div>
            <div>
                <label>Email</label><br>
                <input type="email" name="email">
            </div>
            <div>
            <label>Rol</label><br>
                    <select name="rol" required>
                        <option value="estudiant">Estudiant</option>
                        <option value="professor">Professor</option>
                        <option value="centre">Centre</option>
                    </select>
            </div>
            <div>
                <label>Active</label><br>
                <input type="checkbox" name="actiu">
            </div>
            <input type="submit" value="Submit" name="Enviar">
        </form>
        <a href="{{ route('loginUsers') }}">Iniciar sessio</a>
  </body>
</html>