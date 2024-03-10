<?php
	$acaoU = 'recuperar';
	require_once 'usuario.controller.php';
	
	foreach($usuario as $indice => $usuario){
		echo "Nome: $usuario->nome; email: $usuario->email<br>";
	}
?>