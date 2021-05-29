<?php
abstract class Conta  {
    private $numconta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;
    private $nome;
    private $cpf;
    private $senha;
    
    public function Conta($numconta,$dono){
        $this->numconta=$numconta;
        $this->dono=$dono;
        $this->saldo=50;
        $this->status="aberta";
    
    }

    public function __construct()
    {     
    }
    public function __destruct()
    {     
    }
    /*public function Conta($numconta,$dono,$tipo){
$this->numconta=$numconta;
$this->dono=$dono;
$this->saldo=1000;
$this->getStatus("aberto");
    }*/
    public function setNumConta($numconta){
        $this->numconta=$numconta;
    }
public function getNumConta(){
    return $this->numconta;
}
public function setTipo($tipo){
    $this->tipo=$tipo;
}
public function getTipo(){
    return $this->tipo;
}
public function setDono($dono){
    $this->dono=$dono;
}
public function getDono(){
    return $this->dono;
}
public function setSaldo($saldo){
    $this->saldo=$saldo;
}
public function getSaldo(){
    return $this->saldo;
}
public function setStatus($status){
    $this->status=$status;
}
public function getStatus(){
    return $this->status;
}    
public function getNome(){
    return $this->nome;
}
public function setNome($nome){
    $this->nome=$nome;
}
public function getCpf(){
    return $this->cpf;
}
public function setCpf($cpf){
    $this->cpf=$cpf;
}
public function getSenha(){
    return $this->senha;
}
public function setSenha($senha){
    $this->senha=$senha;
}

}
?>