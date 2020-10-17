<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // ARREGLOS DE UNA(1) DIMENSION

    $precios=array(1600,5000,2600);
    $nombres=array("arroz", "salchichas","huevos");
    $marcas=array("diana","zenu","avinal");

    //ARREGLO MULTIDIMENSIONAL
    $productos= array(
        array("arroz","diana",1600),
        array("salchichas","zenu",5000),
        array("huevos","avinal",2600)
    );

    print_r($productos);
?>

<br>
<br>

<?php
print_r($nombres);
?>

<br>
<br>

<?php
echo($nombres[0]);
?>

<br>
<br>

<?php
print_r($productos[0]);
?>

<br>
<br>

<?php
echo($productos[0][0]);
?>

<br>
<br>

<?php
//Recorrer el arreglo
foreach($productos as $valor){

    print_r($valor);
    echo("<br>");

}
?>
    
</body>
</html>
