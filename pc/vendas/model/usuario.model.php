<?php
class Usuario{
	private $id_usuario;
	private $nome;
	private $email;
	private $senha;
	
	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
	public function __get($atributo){
		return $this->$atributo;
	}	
}
/*
$us = new Usuario();
$us->__set('nome''DayCarolPedro');

echo  $us->__get ('nome');*/
?>