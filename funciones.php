<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* $nombre = "Catalina";
$nombre2 = "Pedrito";
$nombre3 = "Doña nidia";
echo ("Buenas noches ". $nombre. "<br/>");
echo ("Buenas noches ". $nombre2. "<br/>");
echo ("Buenas noches ". $nombre3. "<br/>"); */

//Definicion o declaracion o construccion de una funcion:

$nombre="Juan";

function saludar($nombres){
    return ("Buenas noches ".$nombres ."<br>"
);
}

//Llamada de la funcion
echo (saludar($nombre));
echo (saludar("Ludovico"));
echo (saludar("Sara"));

function sumar($nro1, $nro2){
    $suma = $nro1 + $nro2;

    return $suma;
}

$sumados = sumar(1,2);

$multiplicacion = $sumados * 2;

echo ("la suma de 2 numeros es igual a ".$sumados." y si se multiplican por 2 es de ". $multiplicacion. "<br/>");

$sumados = sumar(2,4);

$multiplicacion = $sumados * 2;

echo ("la suma de 2 numeros es igual a ".$sumados." y si se multiplican por 2 es de ". $multiplicacion. "<br/>");

?>
</body>
</html>