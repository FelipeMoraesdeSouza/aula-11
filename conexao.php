<?php
$localhost  = "localhost";
$username   = "root";
$password   = "";
$db         = "bdsistema";

try {
    $con = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
    //var_dump($con); //debugar - Descobrir o que está sendo respondido
    //echo "funcionou";

} catch(PDOException $e) {
    echo "conexão falhou:<br> ".$e->getMessage();

}
/*
<?php

$localhost  = "localhost";

$username   = "root";

$password   = "";

$db         = "bdsistema";



try {

    $con = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);

    //var_dump($con); //debugar - Descobrir o que está sendo respondido

} catch(PDOException $e) {

    echo "conexão falhou:<br> ".$e->getMessage();



}
*/
