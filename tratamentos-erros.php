<?php

try {
   echo '<h3>try</h3>';
   $sql = 'select * from cliente';
   mysqli_query($sql);
   // vai retornar um erro, pois ainda criei nenhum banco 
} catch (Error $error) {
   echo 'catch' . $error;
} finally {
   echo '<h3 class="teste">finally</h3>';
}
echo '<hr>';

function dividir($x, $y) {
   if ($y == 0) {
      throw new Exception('é uma divisão por zero.');
   }
   $resultado = $x / $y;
   return $resultado;
};

try {
   echo dividir(5, 0) . "<br/>";
} catch (Exception $e) {
   echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}
