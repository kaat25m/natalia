<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo del Triángulo</title>
    <link rel="stylesheet" href="Practica1.css">

</head>
<body>
<div class="card">
    <h2>Cálculo del Triángulo</h2>
    <?php
    // Datos del triángulo
    $base = 10;      // en cm
    $altura = 6;     // en cm
    $lado1 = 10;     // en cm
    $lado2 = 8;      // en cm
    $lado3 = 6;      // en cm
    // Cálculo del área (fórmula: (base * altura) / 2)
    $area = ($base * $altura) / 2;
    // Cálculo del perimetro (suma de los tres lados)
    $perimetro = $lado1 + $lado2 + $lado3;

    // Imprimir datos del Triángulo 
    echo "<div class='dato'>Base del triángulo: <br>$base cm</b></div";
    echo "<div class='dato'>Altura del triángulo: <br$altura cm</b></div";
    echo "<div class='dato'>Lado1: <br>$lado1 cm</b></div";
    echo "<div class='dato'>Lado2: <br>$lado2 cm</b></div";
    echo "<div class='dato'>Lado3: <br>$lado3 cm</b></div";
    echo "<hr>";

    // Mostrar resultados 
    echo "div class='resultado'>Área del triángulo: <br>$area cm²</b></div";
    echo "div class='resultado'>Perimetro del Triángulo: <br>$perimetro cm</b></div";
    ?>
</div>
</body>
</html>







</body>
</html>