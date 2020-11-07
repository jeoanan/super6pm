<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="registrarUsuarios.php" method="POST">
    <div class="box-form">
        <label for="nombre">Nombre</label>
        <input type="text" name ="nombre" id="nombre" placeholder="Nombre" class="text">
    </div>
    <br>
    <div class="box-form">
        <label for="apellido">Apellido</label>
        <input type="text" name ="apellido" id="apellido" placeholder="Apellido" class="text">
    </div>
    <br>
    <div class="box-form">
        <label for="">Descripcion</label>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
    </div>
    <br>
    <div class="box-form">
        <label for="">Sexo</label>
        <br>
        <label for="">Masculino</label>
        <input type="radio" name="genero" id="genero" value="m">
        <label for="">Femenino</label>
        <input type="radio" name="genero" id="genero" value="f">
    </div>

    <button name="botonEnvio" type="submit">Enviar información</button>
    </form>
</body>
</html>