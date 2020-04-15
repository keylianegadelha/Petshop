<?php
    class Agenda{
        private $idAgenda;
        private $data;
        private $hora;
        private $idCliente;
        private $idEmail;
        private $idServico;
        
        public function getIdAgenda(){
            return $this->idAgenda;
        }
        public function getData(){
            return $this->data;
        }
        public function getHora(){
            return $this->hora;
        }
        public function getIdCliente(){
            return $this->idCliente;
        }
        public function getIdEmail(){
            return $this->idEmail;
        }
        public function getIdServico(){
            return $this->idServico;
        }
        public function setIdAgenda($ia){
            $this->idAgenda = $ia; 
        }
        public function setData($d){
            $this->data = $d;
        }
        public function setHora($h){
            $this->hora = $h;
        }
        public function setIdCliente($ic){
            $this->idCliente = $ic;
        }
        public function setIdEmail($ie){
            $this->idEmail = $ie;
        }
        public function setIdServico($is){
            $this->idServico = $is;
        }
    }
?>  
