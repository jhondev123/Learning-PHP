<?php
include "Connection.php";
try {
$connection = getConnection();
$sql= "DELETE FROM contas_corrente WHERE  idConta_Corrente= :id";
$stmt = $connection->prepare($sql);
$nome="tiago";
$id=2;
$stmt->bindParam("id",$id);
if($stmt->execute()){
    echo "Deletado com sucesso ";
}else{
    echo"não Deletado com sucesso";
}
}catch(PDOException $e){
    echo " Erro : " . $e->getMessage();
}