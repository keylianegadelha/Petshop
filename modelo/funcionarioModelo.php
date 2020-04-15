<?php
    class Funcionario{
        private $idFuncionario;
        private $nome;
        private $email;
        private $senha;
        private $conSenha;
        private $cpf;
        
        public function getIdFuncionario(){
            return $this->idFuncionario;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function getConSenha(){
            return $this->conSenha;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function setIdFuncionario($if){
            $this->idFuncionario = $if; 
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function setEmail($e){
            $this->email = $e;
        }
        public function setSenha($s){
            $this->senha = $s;
        }
        public function setConSenha($cs){
            $this->conSenha = $cs;
        }
        public function setCpf($c){
            $this->cpf = $c;
        }
    }
?>  
