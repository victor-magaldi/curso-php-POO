<?php
require "./biblioteca/lib1/lib1.php";
require "./biblioteca/lib2/lib2.php";

// para usar o namespace Primeiro da importação
use Lib1\Cliente;
use Lib2\Cliente as ClienteB;


$cliente = new Cliente();
print_r($cliente);
echo '<br/>';
echo $cliente->salvar();

echo '<hr/>';

$cliente = new ClienteB();
print_r($cliente);
echo '<br/>';
echo $cliente->erro();
