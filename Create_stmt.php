<?php
function saveCC($nome,$saldo,$status,$cpf,$password){
include_once "Connection.php";
try{
$connect=getCon();
$sql = "INSERT INTO Contas_Corrente(nome,saldo,status,cpf,password)VALUES(?,?,?,?,?)"; //salva os dados no banco de dados
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
function saveCP($nome,$saldo,$status,$cpf,$password){
    include_once "Connection.php";
    try{
    $connect=getCon();
    $sql = "INSERT INTO Contas_Poupanca(nome,saldo,status,cpf,password)VALUES(?,?,?,?,?)";
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