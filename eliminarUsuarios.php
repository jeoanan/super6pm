<?php

include("BaseDatos.php");

//0. recibir el id
$id = $_GET["id"];

//1. crear un objeto de la clase baseDatos
    $transaccion=new BaseDatos();

//2. Consulta SQL para eliminar registros
    $consultaSQL="DELETE FROM usuarios WHERE idUsuario='$id'";

//3.Utilizar el metodo eliminarDatos
    $transaccion->eliminarDatos($consultaSQL);
    










?>