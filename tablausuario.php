<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <main>
        <?php
            $usuarios= array(
                array(43512134,"diana","gomez",1600,3451212),
                array(1128356678,"juan","ardila",5000,3451213),
                array(1048229012,"felipe","gutierrez",2600,3451214),
                array(23434156,"kristin","alvarez",3000,3451252),
                array(8107890,"diego","petro",3100,3451216)
            );
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cedula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $usuario): ?>
                    <tr>
                        <th scope="row"> <?= $usuario[0]; ?></th>
                        <td><?php echo($usuario[1]); ?></td>
                        <td><?php echo($usuario[2]); ?></td>
                        <td><?php echo($usuario[3]); ?></td>
                        <td><?php echo($usuario[4]); ?></td>
                    </tr>
                <?php endforeach ?>    
            </tbody>
        </table>
    </main>
    
    <!-- cedula- nombre- apellido - contraseña - telefono   5 personas -->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>