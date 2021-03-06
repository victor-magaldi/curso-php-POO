<?php
class Funcionario {
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;


    // getters e setters com overloading 
    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
    function __get($atributo) {
        return $this->$atributo;
    }

    //getter e setters
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
    function getNome() {
        return $this->nome;
    }
    function getTelefone() {
        return $this->telefone;
    }
    function getNumFilhos() {
        return $this->numFilhos;
    }

    //metodos 
    function resumirCardfunc() {
        return $this->__get('nome') . " possui" . $this->__get('numFilhos') . " filhos esse é o resumo do card";
    }
    function modificaNumFilhos($num) {
        $this->numFilhos = $num;
    }
}
$funcionario = new Funcionario();
$funcionario->__set('nome', 'jão magnaldo');
$funcionario->__set('numFilhos', 88);

var_dump($funcionario);
echo '<br>';
echo $funcionario->__get('nome');
echo '<br>';
echo $funcionario->resumirCardfunc();
