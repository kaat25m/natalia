<?php

// 18. Mostrar suma acumulada de los primeros 10 numeros
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
    echo "Suma hasta $i: $suma <br>";
}
echo "<br>";

?>