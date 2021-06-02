<?php
function save($nome,$saldo,$status,$cpf,$password){
include "Connection.php";
try{
$connect=getConnection();
$sql = "INSERT INTO Contas_Corrente(nome,saldo,status,cpf,password)VALUES(?,?,?,?,?)";
$stmt = $connect->Prepare($sql);
$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$saldo);
$stmt->bindParam(3,$status);
$stmt->bindParam(4,$cpf);
$stmt->bindParam(5,$password);
if($stmt->execute()){
    echo" Deu certo ";
}else{
    echo " Deu ERRADO ";
}
}catch(PDOException $E){
    echo" O erro é : ". $E->getMessage();
}
}