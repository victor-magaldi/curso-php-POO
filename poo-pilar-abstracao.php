<?php
class Funcionario
{
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //metodos 
    function resumirCardfunc()
    {
        return "esse é o resumo do card";
    }
}
$y = new Funcionario();
echo $y->resumirCardfunc();
