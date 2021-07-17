<?php
$menu = basename($_SERVER['PHP_SELF'], ".php")
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include_once '../includes/css.php' ?>
</head>
<body>
<header>
    <div class="backgroundHeader w3-border-bottom">
        <button class="w3-button w3-teal w3-xlarge w3-hide-large" id="btnOpenMenu">&#9776;</button>
        <div class="w3-container" id="headerTitle">
            <h3>Registros</h3>
        </div>
    </div>
</header>
<aside>
    <?php include_once '../includes/menu.php' ?>
</aside>
<main>
    <div class="w3-main">
        <div class="w3-container">

        </div>
    </div>
</main>

<?php include_once '../includes/js.php' ?>
</body>
</html>