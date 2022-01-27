<?php

$c1=new Cliente();
$c2=new Cliente();


class Cliente{

   public $nConta;

   public $tConta;

   public $nRegistro;

   public $saldo;



   //definindo metódo com passagem de paramÊtros

   function setCliente($nConta, $tConta, $nRegistro, $saldo,$limite)

   {

        $this->nConta = $nConta;

        $this->tConta = $tConta;

        $this->nRegistro = $nRegistro;

        $this->saldo = $saldo;
        $this->limite = $limite;
        $this->valConta=($saldo+$limite);

   }



   function exibirDadosCliente(){

       echo "Número da Conta: {$this->nConta}<br>";

       echo "Tipo da Conta: {$this->tConta}<br>";

       echo "Número Registro: {$this->nRegistro}<br>";

       echo "Saldo: {$this->saldo}<br>";

       echo "<Hr>";

   }



   function depositar($valor){

       $this->saldo = $this->saldo + $valor;

   }



   function sacar($valor){
    if($valor<=$valConta){

        $this->saldo = $this->$saldo - $valor; 

   } else {

      echo "Saldo Insuficiente.<br> 

            Saldo em Conta: {$this->valConta} "; 

   }

        }

        
    
    }