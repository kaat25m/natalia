<h2>Nómina del Empleado</h2>
    <form action="bucle6.php" method="post">

    <?php
    $cont = 1;
    while($cont <= 7){
        echo "<label for='Sueldo$cont'>Sueldo $cont:</label><br>";
        echo "<input type='number' name='Sueldo$cont' id='Sueldo$cont' required><br><br>";
        $cont++;
    }
    ?>
    <input type="submit" value="Calcular">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cont = 1;
        $acu = 0;

        echo "<h3>Resultado de la nómina</h3>";
        while($cont <= 7){
            $sueldo = $_POST["Sueldo$cont"];
            echo "Sueldo $cont: <b>$sueldo</b><br>";
            $acu += $sueldo;
            $cont++;
        }
        echo "<br><b>Acumulado total: $acu</b>";
    }
    ?>