<?php
echo basename($_SERVER['PHP_SELF'], ".php");

$msg = $_POST['message'];
$array = explode(PHP_EOL, $msg);
$array2 = "";

$headers = explode("\t", $array[0]);

foreach ($headers as $header){
    print_r($header . " | ");
}

/*foreach ($array as $item){
    $headers = explode("\t", $item);
    $array2 = explode("\t", $item);
    foreach ($array2 as $value){


        print_r($value . " | ");
    }
    echo "<hr>";
}*/
?>

