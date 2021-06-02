<?php
function getConnection(){
    $a='mysql:host=localhost;dbname=Banco;charse=utf8';
    $b='root';
    $c="";
try {
$connection = new PDO($a,$b,$c);
$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
return $connection;
}catch(PDOException $error){
    echo" Error ". $error->getMessage();
}
}
