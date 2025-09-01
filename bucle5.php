<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina1</title>
    <link rel="stylesheet" href="bucle5.css">
</head>
<body>

<h2>Bucle Repetitvo While en PHP</h2>
  <form action="bucle5.php" method="post">
    <label> Ingrese un número limite:</label>
    <input type="number" name="limite" main="1" required> 
    <br>
    <br>
    <input type="submit" valune="Generar">
    <button type="button" onclick="location.hrefe=location.hrefe">Limpiar</button>

    </form>


    <?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST ["Limite"])) {
    $limite = $POST ["Limite"];
    $contador = 1;

    echo "div class='resultado'>";
    echo "<h3>Resultados:</h3>";
    while ($contador <= $Limite) {
        echo "Número: " . $contador . "<br>";
        $contador++;
    }
    echo "</div>";
}
?>

 
</body>
</html>