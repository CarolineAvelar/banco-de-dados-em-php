<?php
	class UsuarioService{
		private $usuario;
		private $conexao;
		
		public function __construct(Usuario $usuario, Conexao $conexao){
			$this->usuario = $usuario;
			$this->conexao = $conexao->conectar();
		}
		
		public function inserir(){
			$query = 'insert into usuario (nome, email, senha)
					value (?,?,?)';	
			$stmt= $this->conexao->prepare($query);		
			$stmt->bindValue(1,$this->usuario->__get('nome'));		
			$stmt->bindValue(2,$this->usuario->__get('email'));		
			$stmt->bindValue(3,$this->usuario->__get('senha'));	
			$stmt->execute();
		}
		public function recuperar(){
			$query = 'select id_usuario, nome, email, senha from usuario';	
			$stmt= $this->conexao->prepare($query);		
			$stmt->execute();
			return $stmt->fetchALL(PDO::FETCH_OBJ);
		}
	}
	
?>