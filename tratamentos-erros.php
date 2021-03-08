<?php

try {
   echo '<h3>try</h3>';

   $sql = 'select * from cliente';
   mysqli_query($sql);
   // vai retornar um erro, pois ainda criei nenhum banco 
} catch (Error $error) {
   echo 'catch' . $error;
} finally {
   echo '<h3>finally</h3>';
}
