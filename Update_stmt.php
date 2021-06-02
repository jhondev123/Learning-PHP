<?php

include "Connection.php";
try {
$connection = getConnection();
$sql= "UPDATE contas_corrente SET nome = :nome WHERE idConta_Corrente= :id";
$stmt = $connection->prepare($sql);
$nome="tiago";
$id=2;
$stmt->bindParam("nome",$nome);
$stmt->bindParam("id",$id);
if($stmt->execute()){
    echo "ATUALIZADO com sucesso ";
}else{
    echo"não atualizado com sucesso";
}


}catch(PDOException $e){
    echo " Erro : " . $e->getMessage();
}