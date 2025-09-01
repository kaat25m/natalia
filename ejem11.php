<?php

// 11. Contar cuantos números pares hay del 1 al 50
$contador = 0;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) 
        $contador++;
echo "Números son $i<br>";
}
echo "Números pares son $contador<br>";

?>