<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Listado, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        include ("BaseDatos.php");

        //1. Crear un obejto de la clase BaseDatos
        $transaccion= new BaseDatos();

        //2. Crear la consulta SQL para buscar datos
        $consultaSQL="SELECT * FROM usuarios WHERE 1";

        //3. Utilizar el metodo para consultar datos
        $usuarios=$transaccion->consultarDatos($consultaSQL);

        print_r($usuarios);
    ?>
</body>
</html>