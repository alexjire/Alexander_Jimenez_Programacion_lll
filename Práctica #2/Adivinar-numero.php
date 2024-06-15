<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
    
</head>
<body>
<div class="container">
    <h1>Adivina el Número del 1 al 10</h1>
    <form method="post">
        <input type="number" name="numero" placeholder="Ingrese un número del 1 al 10" min="1" max="10" required>
        <br>
        <input type="submit" name="adivinar" value="Adivinar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroIngresado = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1, 'max_range' => 10]
        ]);
        $numeroAleatorio = rand(1, 10); /*genero un número aleatorio con rand y como primer parametro le pongo el 1 y el segundo seria el 10, lo cual el número aleatoria estaria entre 1 y 10*/

        if ($numeroIngresado === false) {
            echo "<div class='result'><p><strong>Por favor ingrese un número válido del 1 al 10.</strong></p></div>";
        } elseif ($numeroIngresado == $numeroAleatorio) {
            echo "<div class='result'><p><strong>¡Felicidades! Has adivinado el número. Era $numeroAleatorio.</strong></p></div>";
        } else {
            echo "<div class='result'><p><strong>Lo siento, no has adivinado. El número era $numeroAleatorio.</strong></p></div>";
        }
    }
    ?>
</div>
</body>
</html>
