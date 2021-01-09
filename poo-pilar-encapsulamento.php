<?php
class Pai
{
   private $nome = 'victor';
   protected $sobrenome = 'magaldi';
   public $humor = 'feliz';

   public function __get($name)
   {
      return $this->$name;
   }
   public function __set($attr, $value)
   {
      $this->$attr = $value;
   }

   public function getNome()
   {
      return $this->nome;
   }
   public function setNome($novoNome)
   {
      if (strlen($novoNome) >= 3) {
         $this->nome = $novoNome;
      }
   }
}

$pai = new Pai();
//protected e private não estão disponiveis para aplicação , disponível apenas para ao proprio objeto
//para executar um método privado , pode se criar um publico com a chamada desse privado 
echo '<br/>';
echo $pai->humor = "feliz";

// pode se acessar um atributo privado por um método publico 
echo '<br>';
$pai->setNome("joão");

echo $pai->getNome();
echo '<br>';

//se a classe tiver o metódo magico __get e __set o inerpretaador do php usa  eles para acessar o attr privados

echo $pai->nome;
