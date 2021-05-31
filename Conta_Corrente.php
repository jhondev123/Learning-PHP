<?php
class Conta_Corrente extends Conta{
    public function Conta_Corrente($numconta,$dono,$cpf,$senha){
        $this->numconta=$numconta;
        $this->dono=$dono;
        $this->saldo=1010;
      $this->status="aberta";
      $this->pagarMensalidade();
      $this->cpf=$cpf;
      $this->senha=$senha;
            }
            public function depositar($quantia){
              $saldoatual = parent::deposita($this->saldo,$quantia);
          echo "saldo atual : $saldoatual";
          $this->saldo=$saldoatual;
      } 
      public function sacar($quantia){
        $saldoatual= parent::saque($this->saldo,$quantia,$this->status);
    $this->saldo=$saldoatual;
    echo "saldo atual : $saldoatual"; 
    }
          public function  verDadosdaConta(){
parent :: verDadosConta($this->numconta,$this->dono,$this->saldo,$this->status,$this->cpf);
  }
  public function fecharConta(){
    parent::fecharContasuper($this->saldo,$this->saldo,$this->status);
  }
  public function pagarMensalidade(){
    $this->saldo-=10;
}
}

?>