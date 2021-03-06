<?php

class Pessoa {
    public $nome = null;
    public function __construct($nome) {
        $this->nome = $nome;
    }
    public function __destruct() {
        echo 'objeto removido';
    }
    function __get($attr) {
        return $this->$attr;
    }
    function correr() {
        echo $this->nome . 'está correndo ';
    }
}
$pessoa = new Pessoa("Victor de Souza ");
var_dump(($pessoa));
echo '<br>';
echo $pessoa->correr();
echo '<br>';

// para destruir o objeto 
unset($pessoa);
