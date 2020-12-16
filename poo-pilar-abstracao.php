<?php
class Funcionario
{
    //atributos
    public $nome = "josé";
    public $telefone = "11 25252525";
    public $numFilhos = 2;

    //metodos 
    function resumirCardfunc()
    {
        return "$this->nome possui $this->numFilhos esse é o resumo do card";
    }
    function modificaNumFilhos($num)
    {
        $this->numFilhos = $num;
    }
}
$y = new Funcionario();
echo $y->modificaNumFilhos(18);
echo $y->resumirCardfunc();
