<?php
require_once "Conta.php";
require_once "Conta_Corrente.php"; //Chama as classes do sistema
require_once "Conta_Poupanca.php";

function getConnection(){
try {
$connection = new PDO('mysql:host=localhost;dbname=Banco;charse=utf8','root',"");

$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
return $connection;
}catch(PDOException $error){
    echo" Error ". $error->getMessage();
}
}
/*$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$conta = $_POST["conta"];
$saldo=0;
if($conta=="Conta Corrente"){
$saldo=50;
}else{
$saldo=100;
}*/