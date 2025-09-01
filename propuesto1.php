<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="propuesto1.css">
</head>
<body>


<h2>Calcular Sueldo Neto del Trabajador</h2>

    <form method="post">
    <input type="text" name="nombre" required>

    <label>Categoria:</label>
    <select name="categoria" required>
        <option value="1">Categoria 1 - Aumento 15%</option>
        <option value="2">Categoria 2 - Aumento 10%</option>
        <option value="3">Categoria 3 - Aumento 8%</option>
        <option value="4">Categoria 4 - Aumento 7%</option>
    </select>
    
    <label>Sueldo Base:</label>
    <input type="number" name="sueldo" required>

    <button type="submit" class="btn">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $sueldo = $_POST["sueldo"];

    // Calcular aumento segun la categoria 
    switch ($categoria) {
        case 1: $aumento = $sueldo * 0.15; break;
        case 2: $aumento = $sueldo * 0.10; break;
        case 3: $aumento = $sueldo * 0.08; break;
        case 4: $aumento = $sueldo * 0.07; break;
        default: $aumento = 0; break;
    }

    $sueldoNeto = $sueldo + $aumento;

    //Mostrar resultados 
    echo "<div> class='resultado'>";
    echo "<h3>Resultado</h3>";
    echo "Nombre: <b>$nombre</b><br>";
    echo "Categoria: <br>$categoria</br><br>";
    echo "Sueldo base: S/ " . number_format($sueldo, 2) . "<br>";
    echo "Aumento: S/ " . number_format($aumento, 2) . "<br>";
    echo "Sueldo Neto: <b>S/ " . number_format($SueldoNeto, 2) . "<br>";
    echo "</div>";
 }
 ?>
</body>
</html>