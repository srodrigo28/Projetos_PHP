<?php
    class Data{
        public $dia = 1;
        public $mes = 1;
        public $ano = 1970;

        public function apresentar(){
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    $niver = new Data;
    $niver-> dia = 28;
    $niver-> mes = 2;
    $niver-> ano = 2014;
    echo $niver->apresentar();