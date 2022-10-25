<?php
$server = "localhost";
$user = "root";
$senha = "";
$db = "hungryburguer";

$con = new mysqli($server, $user, $senha, $db);

if(!$con){
    echo "erro";
}


?>
