<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Notas</title>
    <link rel="stylesheet" href="Nota11.css">

</head>
<body>
    <div class ="card">
        <h2>Resultado del Estudiante</h2>
        <?php
        // DECLARAR LAS VARIABLES
        $nota1 = 10;
        $nota2 = 17;
        $nota3 = 12;
        $nota4 = 19;

        $cond="";
        $mayor=0;
        $menor=21;
        $ACU=0;

        // Calcular acumulado (suma de las notas)
        $ACU = $nota1 + $nota2 + $nota3 + $nota4;
        
        // calcular el promedio final
        $promedio = $ACU / 4;

        // Verificar si apruebo o repruebo
        if($promedio >= 13){
            $cond = "APROBADO";
            $clase = "aprobado";
        } else {
            $cond = "REPROBADO";
            $clase = "reprobado";
        }

        // Hallar mayor nota
        if($nota1 > $nota2 && $nota1 > $nota3 && $nota1 > $nota4){
            $mayor = $nota1;
        } elseif($nota2 > $nota1 && $nota2 > $nota3 && $nota2 > $nota4){
            $mayor = $nota2;
        } elseif($nota3 > $nota1 && $nota3 > $nota2 && $nota3 > $nota4){
            $mayor = $nota3;
        } else {
            $mayor = $nota4;
        }
//Hallar mayor nota
if($nota1 > $nota2 && $nota1 > $nota3 && $nota1 > $nota4){
    $mayor = $nota1;
} elseif($nota2 > $nota1 && $nota2 > $nota3 && $nota2 > $nota4){
    $mayor = $nota2;
 } elseif($nota3 > $nota1 && $nota3 > $nota2 && $nota3 > $nota4){
     $mayor = $nota3;
 } else {
    $mayor = $nota4;
 }

        // Mostrar resultados
        echo "<div class='nota'>Nota 1: $nota1</div>";
        echo "<div class='nota'>Nota 2: $nota2</div>";
        echo "<div class='nota'>Nota 3: $nota3</div>";
        echo "<div class='nota'>Nota 4: $nota4</div>";
        echo "<hr>";
        echo "<div class='resultado'><strong>Acumulado:</strong> $ACU</div>";
        echo "<div class='resultado'><strong>Promedio Final:</strong> $promedio</div>";
        echo "<div class='resultado'><strong>Mayor Nota:</strong> $mayor</div>";
        echo "<div class='resultado'><strong>Menor Nota:</strong> $menor</div>";
        echo "<div class='estado $clase'>Condicion: $cond</div>";
        ?>
    </div>
</body>
</html>