<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Amistad Prensa Digital</title>
</head>
<body id="body-registro">
    <div id="form-registro">
        <form action="../config/registrar-usuario.php" method="post">
            <input type="text" name="username" placeholder=" &#128272; Nombre">
            <input type="text" name="correo" placeholder=" &#128272; Correo">
            <input type="password" name="password" placeholder=" &#128272; Contraseña">
            <input type="number" name="cedula" placeholder=" &#128272; Cedula">
            <input type="text" name="telefono" placeholder=" &#128272; Telefono">
            <input type="text" name="direccion" placeholder=" &#128272; Direccion" id="direccion-registro1">
            <input type="submit" value="Verificar">

          </form>
          <form action="/Amistad/index.php" method="post">
            <input type="submit" value="Cancelar">
          </form>
    </div>
    <section>

    </section>
</body>
</html>
