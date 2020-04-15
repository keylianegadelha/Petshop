<?php
    class Servico{
        private $idServico;
        private $nome;
        private $preco;
        
        public function getIdServico(){
            return $this->idServico;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setIdServico($is){
            $this->idServico = $is; 
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function setPreco($p){
            $this->preco = $p;
        }
    }
?> 