<?php
// Ingreso de calificaciones
$nota1 = 15;
$nota2 = 12;
$nota3 = 14;
$nota4 = 10;
$condicion="";
// Calcular promedio
$promedio = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
// Mostrar resultados 
echo "Nota1: $nota1 <br>";
echo "Nota2: $nota2 <br>";
echo "Nota3: $nota3 <br>";
echo "Nota4: $nota4 <br>";

echo "Promedio final del Estudiante es: $promedio <br>";
// Condicional 
if ($promedio >= 13) {
    $condicion="APROBADO";
} else {
    $condicion="DESAPROBADO";
}
   echo "CONDICION DEL ESTUDIANTE ES: $condicion<br>";
?>