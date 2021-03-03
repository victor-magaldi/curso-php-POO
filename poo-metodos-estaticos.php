<?php
class Exemplo
{
   public static $attr = "atributo 1 ";
   public  $attr2 = "atributo 2 ";

   public static function metodo()
   {
      echo 'eu sou um metódo estatico';
   }
   public function metodo2()
   {
      echo 'eu sou um metódo comum ';
   }
}

// $exemplo = new Exemplo;

//não se pode usar o this em um metódo estático
// os metodos estáticos podem serem acessados sem serem estanciados 

//atributos estaticos não podem ser acessados com '->'


echo Exemplo::$attr;
echo '<br/>';
Exemplo::metodo();
