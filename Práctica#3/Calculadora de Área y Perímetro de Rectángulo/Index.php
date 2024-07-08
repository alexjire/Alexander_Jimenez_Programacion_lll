<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica Rectángulo</title>
    <style>
        body {
            background-color: #A9A9A9; /* color gris */
            color: black; /* color de letra negro */
            text-align: center; /* Texto alineado centralmente */
            font-family: Arial, sans-serif;
            padding-top: 50px;
            margin: auto;
        }
        input[type="number"], input[type="submit"] {
            padding: 10px;
            margin: 10px;
            border-radius: 5px; /* Corrección: border-radius */
            border: 1px solid #ccc;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        .form-group {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }
        .form-group label {
            margin-right: 10px;
            font-size: 20px; /* Tamaño de letra más grande */
        }
    </style>
</head>
<body>
    <h1>Calculadora de Área de Rectángulo</h1>
    <form method="post">
        <div class="form-group">
            <label for="Largo">Largo:</label>
            <input type="number" id="Largo" name="Largo" placeholder="Ingrese el largo" required>
        </div>
        <div class="form-group">
            <label for="ancho">Ancho:</label>
            <input type="number" id="ancho" name="ancho" placeholder="Ingrese el ancho" required>
        </div>
        <input type="submit" name="calcular" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores del formulario
        $largo = $_POST['Largo'];
        $ancho = $_POST['ancho'];

        // Calcular el perímetro
        $perimetro = 2 * ($largo + $ancho);

        // Mostrar el resultado
        echo "<h2>El perímetro del rectángulo es: " . $perimetro . "</h2>";
    }
    ?>
    
</body>
</html>

