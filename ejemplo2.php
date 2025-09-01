
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos1.css">
</head>
<body>
  <div class="contenedor">
        <h2>PROMEDIO  DEL ESTUDIANTE</h2>
        <?php

// ingreso de calificaciobes
$nota1   = 15  ; 
$nota2 =  12   ;   
$nota3  = 14    ;  
$nota4  = 10    ;  
$condicion  =  ""  ;   
// calcular promedio
$promedio = ($nota1 + $nota2 + $nota3 + $nota4)  /4;
// mostrar resultados
echo "nota1: $nota1 <br>";
echo "nota2: $nota2 <br>";
echo "nota3: $nota3 <br>";
echo "nota4: $nota4 <br>";

echo"<div class='resultado'>";
echo "promedio final : <strong> $promedio</strong><br>";
// condicional
if ($promedio >= 13) {
    $condicion="<span class='aprobado'>APROBADO/span";
} else {
    $condicion="<span class='reprobado'>REPROBADO/span";
}
echo "condicion: $condicion";
echo "</div>";
?>
</div>

</body>
</html>



