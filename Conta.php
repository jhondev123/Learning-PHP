<?php
abstract class Conta
{
    private $numconta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;
    private $nome;
    private $cpf;
    private $senha;
    public function __construct()
    {
    }
    public function __destruct()
    {
    }
    public function deposita($saldo, $quantia,$status)
    {
        if ($quantia > 100 && $status=="aberta") {
            $saldo += $quantia;
            return $saldo;
        } else {
            echo " Deposito não foi possivel ser realizado ";
        }
    }
    public  function saque($saldo, $quantia, $status)
    {
        if ($quantia <= $saldo && $status == "aberta") {
            $saldo -= $quantia;
            return $saldo;
            echo "Saque realizado com sucesso";
        } else {
            echo "Saque não realizado com sucesso";
        }
    }
    public function verDadosConta($numconta, $dono, $saldo, $status, $cpf)
    {
        echo "O numero da conta é : " . " $numconta";
        echo "<br>";
        echo "O dono da conta é : " . " $dono";
        echo "<br>";
        echo "O saldo atual da conta é : " . " $saldo";
        echo "<br>";
        echo "Status atual da conta" . " $status";
        echo "<br>";
        echo "CPF vinculado a conta : " . " $cpf";
        echo "<br>";
    }
    public function fecharContasuper($saldo, $quantia, $status)
    {
        $valor = $this->saque($saldo, $quantia, $status);
        if ($valor == 0 && $status == "aberta") {
            return $valor;
            
        } else {
            
        }
    }
    public function setNumConta($numconta)
    {
        $this->numconta = $numconta;
    }
    public function getNumConta()
    {
        return $this->numconta;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
}
