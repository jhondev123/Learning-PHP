<?php
abstract class Pessoa{
private $nome;
private $cpf;
private $rg;
private $data_nascimento;
private $endereco;
public function __construct()
{
}
public function cadastrarPessoa(){
    
}
/**
 * Get the value of nome
 */ 
public function getNome()
{
return $this->nome;
}

/**
 * Set the value of nome
 *
 * @return  self
 */ 
public function setNome($nome)
{
$this->nome = $nome;
return $this;
}
/**
 * Get the value of cpf
 */ 
public function getCpf()
{
return $this->cpf;
}
/**
 * Set the value of cpf
 *
 * @return  self
 */ 
public function setCpf($cpf)
{
$this->cpf = $cpf;

return $this;
}
/**
 * Get the value of rg
 */ 
public function getRg()
{
return $this->rg;
}
/**
 * Set the value of rg
 *
 * @return  self
 */ 
public function setRg($rg)
{
$this->rg = $rg;

return $this;
}
/**
 * Get the value of data_nascimento
 */ 
public function getData_nascimento()
{
return $this->data_nascimento;
}
/**
 * Set the value of data_nascimento
 *
 * @return  self
 */ 
public function setData_nascimento($data_nascimento)
{
$this->data_nascimento = $data_nascimento;

return $this;
}
/**
 * Get the value of endereco
 */ 
public function getEndereco()
{
return $this->endereco;
}
/**
 * Set the value of endereco
 *
 * @return  self
 */ 
public function setEndereco($endereco)
{
$this->endereco = $endereco;
return $this;
}
}
