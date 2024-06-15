<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            background-color: #008080; /* Azul */
            color: black;
        }
        .container {
            
            padding: 20px;
            margin: auto;
            width: 50%;
            text-align: center;
        }
        .result {
            
            margin-top: 20px;
            background-color: #fff; 
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Calculadora Básica de Operaciones Matemáticas</h1>
    <form method="post">
        <input type="number" name="numero1" placeholder="Primer número" required>
        <input type="number" name="numero2" placeholder="Segundo número" required>
        <br>
        <input type="radio" name="operacion" value="suma" checked >Suma
        <input type="radio" name="operacion" value="resta"> Resta
        <input type="radio" name="operacion" value="multiplicacion"> Multiplicación
        <input type="radio" name="operacion" value="division"> División
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        switch($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
            case 'division':
                $resultado = ($numero2 != 0) ? $numero1 / $numero2 : "No se puede dividir por cero";
                break;
            default:
                $resultado = "Operación no válida";
        }

        echo "<div class='result'>";
        echo "<p><strong>El resultado de su operación es:</strong> $resultado</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>