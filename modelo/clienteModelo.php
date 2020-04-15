<?php
	class Cliente{
		private $idCliente;
		private $nome;
		private $email;
		private $senha;
		private $conSenha;

		public function getIdCliente(){
			return $this-> idCliente;
		}
		public function setIdCliente($ic){
			$this-> idCliente = $ic;
		}
		public function getNome(){
			return $this-> nome;
		}
		public function setNome($n){
			$this-> nome = $n;
		}
		public function getEmail(){
			return $this-> email;
		}
		public function setEmail($e){
			$this-> email = $e;
		}
		public function getSenha(){
			return $this-> senha; 
		}
		public function setSenha($s){
			$this-> senha = $s;
		}
		public function getConSenha(){
			return $this-> conSenha;
		}
		public function setConSenha($cs){
			$this-> conSenha = $cs;
		}
	}
?>