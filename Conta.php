<?php
session_start();

    class Conta{

        private $agencia;
        private $numero;
        private  $saldo;


        public function setConta($agencia,$numero,$saldo){
            $this->agencia = $agencia;
            $this->numero = $numero;
            $this->saldo = $saldo;
            $_SESSION['agencia'] = $this->agencia;
            $_SESSION['numero'] = $this->numero;
            $_SESSION['saldo'] = $this->saldo;


        }


        public function getSaldo(){

            return  $this->saldo;
        }

        public function getAgencia(){

            return  $this->agencia;
        }

        public function getNumero(){

            return  $this->numero;
        }
        public function setSaque($valor){

            $this->saldo =  $_SESSION['saldo'] - $valor;
            $_SESSION['saldo'] = $this->saldo;
            //$this->saldo = $this->saldo - $valor;

        }



    }



?>