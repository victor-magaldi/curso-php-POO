<?php
class Funcionario {
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

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
        return "$this->nome possui $this->numFilhos esse é o resumo do card";
    }
    function modificaNumFilhos($num) {
        $this->numFilhos = $num;
    }
}
$y = new Funcionario();
echo $y->modificaNumFilhos(18);
echo $y->resumirCardfunc();
