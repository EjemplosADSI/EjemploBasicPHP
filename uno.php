<?php session_start(); ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Uno</title>
</head>
<body>
    <div>
        <form action="uno.php" method="post" >
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese sus nombres">
            <input type="text" id="apellido" name="apellido" placeholder="Ingrese sus apellidos">
            <input type="submit" name="Enviar">
        </form>
    </div>
    <div>
        <?php

        if(!empty($_POST['nombre']) && !empty($_POST['apellido'])){ //Verificamos si llega un nombre
            $arrUser = [
                'Nombres' => $_POST['nombre'],
                'Apellidos' => $_POST['apellido']
            ];
            $_SESSION['ArrUsers'][] = $arrUser;
            var_dump($_SESSION['ArrUsers']);
        }
        ?>
        <a href="dos.php">Limpar Nombres</a>
    </div>
</body>
</html>