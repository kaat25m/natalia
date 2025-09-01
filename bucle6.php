<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bucle6.css">
</head>
<body>
    <h2>Nomina del Empleado</h2>
    <form action="bucle6.php" method="post">

    <?php
    $sueldo=0;
    $nomina=0;
    $cont=1;
    while($cont<=7){
        echo " <label>Sueldo $cont:</label><br>";
        echo "<input type='number' name='$sueldo' required><br>";
        $cont++;
    }
    
    ?>
    <input type="submit" value="Calcular">

  </form>
  <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$cont=1;
$sueldo=0;
$acu=0;


}

