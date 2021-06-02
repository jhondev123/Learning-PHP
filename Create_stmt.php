<?php
include "Connection.php";
try{
$connect=getConnection();
$sql = "INSERT INTO Contas_Corrente(nome,saldo,status,cpf,password)VALUES(?,?,?,?,?)";
$stmt = $connect->Prepare($sql);

$stmt->bindValue(1," Lucão");
$stmt->bindValue(2,100.00);
$stmt->bindValue(3,"aberta");
$stmt->bindValue(4,123);
$stmt->bindValue(5,"jhon000");
if($stmt->execute()){
    echo" Deu certo ";
}else{
    echo " Deu ERRADO ";
}
}catch(PDOException $E){
    echo" O erro é : ". $E->getMessage();
}
