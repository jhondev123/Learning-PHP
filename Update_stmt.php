<?php
function atualizar($campo,$valor,$id){
include "Connection.php";
try {
$connection = getConnection();
// Fazendo o teste para saber qual campo quer que seja alterado e de qual id //
if($campo=="nome"){
    $sql= "UPDATE contas_corrente SET nome = :nome WHERE idConta_Corrente= :id";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam("id",$id);
        $stmt->bindParam("nome",$nome);
}elseif($campo=="cpf"){
    $sql= "UPDATE contas_corrente SET cpf = :cpf WHERE idConta_Corrente= :id";
    $stmt = $connection->prepare($sql);
$stmt->bindParam("cpf",$valor);
$stmt->bindParam("id",$id);
}elseif($campo=="saldo"){
    $sql= "UPDATE contas_corrente SET saldo = :saldo WHERE idConta_Corrente= :id";
$stmt = $connection->prepare($sql);
$stmt->bindParam("saldo",$valor);
$stmt->bindParam("id",$id);
}elseif($campo=="status"){
    $sql= "UPDATE contas_corrente SET status = :status WHERE idConta_Corrente= :id";
 $stmt = $connection->prepare($sql);
$stmt->bindParam("status",$nome);
$stmt->bindParam("id",$id);
}else{
$stmt = $connection->prepare($sql);
$stmt->bindParam("id",$id);
$stmt->bindParam("password",$valor);
}
if($stmt->execute()){
    echo "ATUALIZADO com sucesso ";
}else{
    echo"não atualizado com sucesso";
}
}catch(PDOException $e){
    echo " Erro : " . $e->getMessage();
}
}