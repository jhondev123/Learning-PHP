<?php
require_once "Conta.php";
require_once "Conta_Corrente.php"; //Chama as classes do sistema
require_once "Conta_Poupanca.php";
require_once "Pessoa.php";
require_once "Cliente.php";
$num_conta = random_int(1000, 2000); //gera o numero da conta
$nome = $_POST["nome"];// as variaveis recebem os valores digitados nos campos
$cpf = $_POST["cpf"];
$senha = $_POST["senha"]; 
$tipo_conta = $_POST["Conta"];
if (isset($_POST["Conta"])) { //testa se o campo conta é nulo
    if ($tipo_conta == "Conta Corrente") {//testa o tipo da conta
        $conta1 = new Conta_Corrente($num_conta, $nome, $cpf, $senha);  //instancia a conta de acordo com o teste lógico
    } else {
        $conta1 = new Conta_Poupanca($num_conta, $nome, $cpf, $senha);
    }
}
 // chamamento dos métodos da conta

?>
<!DOCTYPE html>
<html lang="br">
<head>
    <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abertura de conta</title>
</head>
<body>
    <div class="container">
        <div class="formulario">
            <div class="form1">
                <form method="POST" action="index.php" name="cadastro">
                    <label for="nome" id="lblNome">Digite seu nome :</label>
                    <input type="text" name="nome" class="inputblock">
                    <label for="cpf">Digite seu CPF :</label>
                    <input type="text" name="cpf" class="inputblock">
                    <label for="senha">Digite sua senha :</label>
                    <input type="password" name="senha" class="inputblock">
                    <label>Deseja Abrir conta corrente ou conta poupanças?</label><br>
                    <input type="radio" id="Conta" name="Conta" value="Conta Corrente" checked>Conta Corrente
                    <input type="radio" id="Conta" name="Conta" value="Conta Poupanca">Conta Poupança
                    <input type="submit" value="enviar" id="enviar">
            </div>
        </div>
        </form>
</body>
</html>