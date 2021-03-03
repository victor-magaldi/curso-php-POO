<?php
// os metodos declarados na interface devem ser implementados caso a classe tenha a interface implementada
interface Eletronic
{
   public function abrirPorta();
   public function fecharPorta();
}

// caso houvesse duas interfaces para uma mesma classe basta apenas separa a interface por ','
//class Geladeira Eletronic, outraInteface

class Geladeira implements Eletronic
{
   public function abrirPorta()
   {
      echo "abriu porta";
   }
   public function fecharPorta()
   {
      echo "fechar porta";
   }
}

class Tv
{
   public function ligar()
   {
      echo "ligou tv";
   }
}

$geladeira = new Geladeira();
