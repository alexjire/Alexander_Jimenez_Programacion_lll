<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Promedio</title>
    
</head>
<body>

<div class="container">
    <h1>Calculadora de Promedio de Notas</h1>
    <form method="post">
        <input type="number" name="nota1" placeholder="Nota 1" step="0.01" required>
        <input type="number" name="nota2" placeholder="Nota 2" step="0.01" required>
        <input type="number" name="nota3" placeholder="Nota 3" step="0.01" required>
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = filter_var($_POST['nota1'], FILTER_VALIDATE_FLOAT);
        $nota2 = filter_var($_POST['nota2'], FILTER_VALIDATE_FLOAT);
        $nota3 = filter_var($_POST['nota3'], FILTER_VALIDATE_FLOAT);

        if ($nota1 !== false && $nota2 !== false && $nota3 !== false) {
            $promedio = ($nota1 + $nota2 + $nota3) / 3;
            $promedio = round($promedio, 2); // Redondear a 2 decimales

            echo "<div class='result'>";
            echo "<p><strong>El promedio de las notas es:</strong> $promedio</p>";
            echo "</div>";
        } else {
            echo "<div class='result'>";
            echo "<p><strong>Por favor ingrese valores de notas válidos.</strong></p>";
            echo "</div>";
        }
    }
    ?>
</div>

</body>
</html>
