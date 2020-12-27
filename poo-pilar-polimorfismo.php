<?php
class Veiculo
{
      public $placa = null;
      public $cor = null;
      function acelerar()
      {
            echo 'acelerou';
      }
      function trocarmarcha()
      {
            echo 'trocar marcha com a mão';
      }
}
class Carro extends Veiculo
{
      public $tetoSolar = true;

      public function __construct($placa, $cor)
      {
            $this->placa = $placa;
            $this->cor = $cor;
      }

      function abrirTetoSolar()
      {
            echo 'abrir teto solar ';
      }
      function mudarPosicaoVolante()
      {
            echo 'alterar a posição do volante';
      }
}
class Moto extends Veiculo
{
      public function __construct($placa, $cor)
      {
            $this->placa = $placa;
            $this->cor = $cor;
      }

      public $contraPesoGuiado = true;
      function empinar()
      {
            echo 'empinar';
      }
      //basta apenas sobreescrever o metodo para aplicar o polimorfismo
      function trocarmarcha()
      {
            echo 'trocar marcha com a pé';
      }
}

$carro = new Carro('placacarro', 'preto');
$moto = new Moto('placaMoto', 'moto');


echo '<hr/>';
echo $moto->trocarmarcha();
echo '<hr/>';
echo $carro->trocarmarcha();
