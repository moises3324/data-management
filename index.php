<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <?php include_once 'src/includes/css.php' ?>
</head>
<body>
<div class="w3-card-4 w3-col l2 w3-display-topmiddle w3-margin-top">
    <div class="w3-container">
        <h3>Login</h3>
    </div>
    <form class="w3-container" method="post" action="./src/app/controllers/LoginController.php">
        <p>
            <label class="w3-text-gray"><b>Usuario</b></label>
            <input class="w3-input w3-border" name="txtUser" type="text"></p>
        <p>
            <label class="w3-text-gray"><b>Contraseña</b></label>
            <input class="w3-input w3-border" name="txtPass" type="password"></p>
        <p>
            <button class="w3-btn w3-green">Ingresar</button>
        </p>
    </form>
</div>

<?php include_once 'src/includes/js.php' ?>
</body>
</html>