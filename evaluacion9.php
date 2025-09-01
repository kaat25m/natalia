<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día de la Semana</title>
    <link rel="stylesheet" href="evaluacion9.css">
</head>
<body>
    <div class="form-container">
        <h2>Introduce un número del 1 al 7</h2>
        <form action="" method="POST"> <!-- Enviar a la misma página -->
            <input type="number" name="numero" min="1" max="7" placeholder="Número (1-7)" required>
            <button type="submit">Ver Día</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numero'];

        // Validar que el número esté entre 1 y 7
        if ($numero >= 1 && $numero <= 7) {
            switch ($numero) {
                case 1:
                    $dia = "Lunes";
                    break;
                case 2:
                    $dia = "Martes";
                    break;
                case 3:
                    $dia = "Miércoles";
                    break;
                case 4:
                    $dia = "Jueves";
                    break;
                case 5:
                    $dia = "Viernes";
                    break;
                case 6:
                    $dia = "Sábado";
                    break;
                case 7:
                    $dia = "Domingo";
                    break;
            }
            echo "<h2>El día correspondiente es: <strong>$dia</strong></h2>";
        } else {
            echo "<h2 style='color: red;'>Por favor, ingresa un número válido entre 1 y 7.</h2>";
        }
    }
    ?>
</body>
</html>