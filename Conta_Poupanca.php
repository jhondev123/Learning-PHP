
<?php

class Conta_Poupanca extends Conta{

    public function Conta_Poupanca($numconta,$dono,$cpf,$senha){
        $this->numconta=$numconta;
        $this->dono=$dono;
        $this->saldo=150;
        $this->status="aberta";
        $this->pagarMensalidade();
        $this->cpf=$cpf;
        $this->senha=$senha;

    }
    public function depositar($quantia){
        if($quantia>100 && $this->status=="aberta"){
        $this->saldo+=$quantia;
        echo "Deposito realizado com sucesso";
        echo"<br>";
        echo"O valor da conta agora é : $this->saldo";
        }else{
        echo "Deposito não efetuado";
        }
    }
    public function sacar($quantia){
    if($quantia<=$this->saldo&&$this->status=="aberta"){
    $this->saldo-=$quantia;
    echo " O valor a ser sacado é : $quantia";
    echo"<br>";
    echo " O saldo atual da conta é : $this->saldo";
    }else {
echo " Saldo insuficiente na conta, Saldo atual $this->saldo";
echo " Ou Conta fechada ";
    }
}
public function verDadosConta(){
    echo" O numero da conta é : " . "$this->numconta";
    echo "<br>";
    echo " O dono da conta é : "."$this->dono";
    echo "<br>";
    echo " O saldo atual da conta é : ". "$this->saldo";
    echo "<br>";
    echo " Status atual da conta "." $this->status";
    echo "<br>";
    }
    public function fecharConta(){
        $this->sacar($this->saldo);
        if($this->saldo<=0 && $this->status=="aberta"){
        $this->status="fechada";
        echo " Conta está : $this->status";
        }else{
        echo " Conta está : $this->status";
        }
    
    }
    public function pagarMensalidade(){
        $this->saldo-=10;
    }
}

?>