<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas con php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
    <h1>TABLAS</h1>
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php
                    $datos = array("Juan","Miguel","Catalina");

                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $valor):?>
                            <tr>
                                <th scope="row">
                                    <?php echo($valor); ?>
                                </th>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
                
                <?php 
                $imagenes = array("https://www.tierragamer.com/wp-content/uploads/2019/09/One-Piece-Monkey-D-Luffy-Sonrisa-450x300.jpg","https://www.tierragamer.com/wp-content/uploads/2019/09/One-Piece-Roronoa-Zoro-Sonrisa.jpg","https://www.alfabetajuega.com/wp-content/uploads/2019/09/one-piece-sanji.jpg","https://i2.wp.com/www.bitme.gg/wp-content/uploads/2020/02/Asi%CC%81-luciri%CC%81a-Nami-de-One-Piece-con-el-estilo-de-Dragon-Ball-y-Naruto.jpg?fit=1280%2C720&ssl=1","https://i.pinimg.com/736x/f0/4d/36/f04d362c1818b7d0e7fa43594f633ecb.jpg");
                
                foreach($imagenes as $valores) : ?>
                    <img src=<?php echo($valores) ?> alt="OnePiece" width= "500px">
                    <br><br>
                <?php endforeach?>
            </div>    
        </div>
    </div>
</main>
<footer>
</footer>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>