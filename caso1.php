<?php
// Datos del triángulo 
$base = 10;
$altura = 6;
$lado1 = 10;
$lado2 = 8;
$lado3 = 6;

// Cálculo del área (formula: (base * altura) / 2)
$area = ($base * $altura) / 2;
// Cálculo del perimetro (suma de los tres lados)
$perimetro = $lado1 + $lado2 + $lado3;
// Imprimir datos de Triangulo 
echo "Base del triangulo es $base.<br>";
echo "Altura del Triangulo es $altura.<br>";
echo "Lado 1 del Triangulo es: $lado1.<br>";
echo "Lado 2 del Triangulo es: $lado2.<br>";
echo "Lado 3 del Triangulo es: $lado3.<br>";
echo "..................................<br>";

// Mostrar resultados
echo "Área del Triangulo: " . $area . " cm²<br>";
echo "Perimetro del Triangulo: " . $perimetro . "cm² ";
?>