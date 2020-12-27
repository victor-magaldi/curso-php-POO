<?php
class Veiculo
{
      public $placa = null;
      public $cor = null;
      function acelerar()
      {
            echo 'acelerou';
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
}

$carro = new Carro('placacarro', 'preto');
$moto = new Moto('placaMoto', 'moto');

echo '<pre>';
echo print_r($carro);
echo print_r($moto);
echo '<pre/>';
echo '<hr/>';
echo $moto->empinar();
echo '<hr/>';
echo $carro->abrirTetoSolar();
echo '<hr/>';
echo $carro->acelerar();
