<?php
function delete($id){
include_once "Connection.php";
try {
$connection = getCon();
$sql= "DELETE FROM contas_corrente WHERE  idConta_Corrente= :id";//deleta os dados
$stmt = $connection->prepare($sql);
$stmt->bindParam("id",$id);
if($stmt->execute()){
    echo "Deletado com sucesso ";
}else{
    echo"não Deletado com sucesso";
}
}catch(PDOException $e){
    echo " Erro : " . $e->getMessage();
}
}