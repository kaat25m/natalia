<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="evaluacion8.css">
</head>
<body>





<div class="form-container">
        <h2>Calculadora</h2>
        <form action="" method="POST">
            <input type="number" name="numero1" placeholder="Número 1" required>
            <input type="number" name="numero2" placeholder="Número 2" required>
            <select name="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacion = $_POST['operacion'];

            switch ($operacion) {
                case 'sumar':
                    $resultado = $numero1 + $numero2;
                    break;
                case 'restar':
                    $resultado = $numero1 - $numero2;
                    break;
                case 'multiplicar':
                    $resultado = $numero1 * $numero2;
                    break;
                case 'dividir':
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                    } else {
                        $resultado = 'No se puede dividir por cero';
                    }
                    break;
            }
            echo "<h2>Resultado: $resultado</h2>";
        }
        ?>
    </div>