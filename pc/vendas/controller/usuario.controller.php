<?php
	require_once 'conexao/conexao.php';
	require_once 'model/usuario.model.php';
	require_once 'service/usuario.service.php';
	
	@$acaoU = isset($_GET['acaoU'])?$_GET['acaoU']:$acaoU;
	@$idU = isset($_GET['idU'])?$_GET['idU']:$idU;
	
	if($acaoU == 'inserir'){
		$usuario = new Usuario();
		
		$usuario->__set('nome',$_POST['nome']);
		$usuario->__set('email',$_POST['email']);
		$usuario->__set('senha',$_POST['senha']);
		
		$conexao = New Conexao();
		
		$usuarioService = New UsuarioService($usuario, $conexao);
		$usuarioService->inserir();
		
	}elseif($acaoU=='recuperar'){
		$usuario = new Usuario();
		$conexao = new Conexao();
		
		$usuarioService = New UsuarioService($usuario, $conexao);
		$usuario = $usuarioService->recuperar();
	}
?>