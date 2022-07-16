<?php

    /*TIPOS DE DADOS
    STRING, [PALAVRAS]
    INTEGER, [NÚMERO INTEIRO QUALQUER, NÃO DECIMAIS]
    FLOAT, [NÚMEROS DECIMAIS]
    BOOLEAN, [TRUE - FALSE]
    ARRAY, [ MATRIZ]
    OBJETCT, [OOBJETO]
    NULL, [NULO]
    */
    //String
    $exemplo1 = "<h1>Fodace</h1>";
    //echo $exemplo1;

    //Integer
    $exemplo2 = 345;
    $exemplo2_1 = -300;
    $inteiro = $exemplo2 + $exemplo2_1;
    //echo $inteiro;

    //float
    $exemplo3 = 4.3;
    $exemplo3_1 = 2.1;
    // var_dump($exemplo1); mostra o tipo que a variavel é

    // BOOLEAN
    $professor_bonitao = true;

    //ARRAY(MATRIZ)
    $carros = array("fusca", "brasilia", "chevete", "camaro");

    //object POO

    class carro{
        public $cor;
        public $modelo;
        public function __construct($cor,$modelo)
        {
            $this->cor = $cor;
            $this->modelo = $modelo;
            
        }
        public function mensagem(){
            return "O carro é $this->cor o modelo é $this->modelo";
        }
    }

    $carro1 = new carro("branco", "fusca");
    echo $carro1->mensagem();

    //null
    //serve para anular variaveis
?>