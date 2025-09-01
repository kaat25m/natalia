<DOCTORTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculo del triangulo</title>
    <link rel= "stylesheet" href= "practica1.css">

</head>
<body>
<div class="card">
    <h2>Calculo del triangulo</h2>
    <?php
    // DATOS DEL TRIANGULO
    $base = 10;        //en cm
    $altura = 6;       //en cm
    $lado1 = 10;       //en cm
    $lado2 = 8;        //en cm
    $lado3 = 6;        //en cm
    // Calculo del area 
    $area = ($base * $altura) / 2;
    // Calculo del perimetro 
    $perimetro = $lado1 + $lado2 + $lado3;

    // Imprimir datos del triangulo
    echo "<div class= 'dato'>Base del triangulo: <b>$base cm</b></div>";
    echo "<div class= 'dato'>Altura del triangulo: <b>$altura cm</b></div>";
    echo "<div class= 'dato'>Lado 1: <b>$lado1 cm</b></div>";
    echo "<div class= 'dato'>Lado 2: <b>$lado2 cm</b></div>";
    echo "<div class= 'dato'>Lado 3: <b>$lado3 cm</b></div>";
    echo "<hr>";

    // Mostrar resultados
    echo "<div class='resultado'>Area del triangulo: <b>$area cm²</b></div>";
    echo "<div class='resultado'>Perimetro del triangulo: <b>$perimetro cm</b></div>";
    ?>
</div>
</body>
</html>