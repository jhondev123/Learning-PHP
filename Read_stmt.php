<?php
include "Connection.php";
try {
$connection = getConnection();
$sql= "SELECT * FROM contas_corrente WHERE idConta_Corrente = :id";
$stmt = $connection->prepare($sql);
$stmt->bindValue(":id",1);
$stmt->execute();
$result = $stmt->fetchAll();

foreach($result as $value)
{
    echo "Nomes : " .$value['nome']."<br>";
}
}catch(PDOException $e){
    echo " Erro : " . $e->getMessage();
}