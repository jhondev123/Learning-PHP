
<?php

class Conta_Poupanca extends Conta
{

    public function Conta_Poupanca($numconta, $dono, $cpf, $senha)
    {
        $this->numconta = $numconta;
        $this->dono = $dono;
        $this->saldo = 150;
        $this->status = "aberta";
        $this->pagarMensalidade();
        $this->cpf = $cpf;
        $this->senha = $senha;
    }
    public function depositar($quantia)
    {
        $saldoatual = parent::deposita($this->saldo, $quantia);
        echo "saldo atual : $saldoatual";
        $this->saldo = $saldoatual;
    }

    public function sacar($quantia)
    {
        $saldoatual = parent::saque($this->saldo, $quantia, $this->status);
        $this->saldo = $saldoatual;
        echo "saldo atual : $saldoatual";
    }
    public function  verDadosdaConta()
    {
        parent::verDadosConta($this->numconta, $this->dono, $this->saldo, $this->status, $this->cpf);
    }
    public function fecharConta()
    {
        $this->sacar($this->saldo);
        if ($this->saldo <= 0 && $this->status == "aberta") {
            $this->status = "fechada";
            echo " Conta está : $this->status";
        } else {
            echo " Conta está : $this->status";
        }
    }
    public function pagarMensalidade()
    {
        $this->saldo -= 10;
    }
}

?>