<?php
$base = '';
strripos($_SERVER['SCRIPT_NAME'], "views") > 0 ? $base = '../' : $base = 'src/';
?>
<link rel="stylesheet" href="<?php echo $base ?>styles/normalize.css" type="text/css">
<link rel="stylesheet" href="<?php echo $base ?>styles/w3.css" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css">
<link rel="stylesheet" href="<?php echo $base ?>styles/styles.css" type="text/css">
