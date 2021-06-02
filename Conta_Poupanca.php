<?php
class Conta_Poupanca extends Conta
{
    //construtor
    public function _construct($numconta, $dono, $cpf, $senha)
    {
        $this->numconta = $numconta;
        $this->dono = $dono;
        $this->saldo = 150;
        $this->status = "aberta";
        $this->pagarMensalidade();
        $this->cpf = $cpf;
        $this->senha = $senha;
    }
    //métodos especiais
    public function depositar($quantia)
    {
        $saldoatual = parent::deposita($this->saldo, $quantia,$this->status); //chama a lógica da superclasse
        echo "saldo atual : $saldoatual";
        $this->saldo = $saldoatual;
    }
    public function sacar($quantia) //chama a lógica da superclasse
    {
        $saldoatual = parent::saque($this->saldo, $quantia, $this->status);
        $this->saldo = $saldoatual;
        echo "saldo atual : $saldoatual";
    }
    public function  verDadosdaConta()
    {
        parent::verDadosConta($this->numconta, $this->dono, $this->saldo, $this->status, $this->cpf);//chama a lógica da superclasse
    }
    public function fecharConta()//chama a lógica da superclasse
    {
        $this->saldo =  parent::fecharContasuper($this->saldo,$this->saldo,$this->status);
        if($this->saldo==0){
        $this->status="fechada";
        echo "Conta $this->status com sucesso. e o saldo atual ficou: $this->saldo";
        }
    }
    public function pagarMensalidade()
    {
        $this->saldo -= 10;
    }
    //métodos padrão
    public function getSaldoo(){
        return $this->saldo;
    }
}
?>