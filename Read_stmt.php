<?php
function ler(){
include_once "Connection.php";
try {
$connection = getCon();
$sql= "SELECT * FROM contas_corrente WHERE idConta_Corrente = :id"; //busca os dados
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
}