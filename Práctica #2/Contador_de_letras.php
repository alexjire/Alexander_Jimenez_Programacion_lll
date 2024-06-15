<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Letras</title>
    
</head>
<body>

<div class="container">
    <h1>Contador de letras</h1>
    <form method="post">
        <input type="text" name="frase" placeholder="Ingrese una frase" required>
        <input type="text" name="letra" placeholder="Ingrese una letra" maxlength="1" required>
        <br>
        <input type="submit" name="Resultado" value="Resultado">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = $_POST['frase'];
        $letra = $_POST['letra'];

        if (!empty($frase) && !empty($letra) && strlen($letra) == 1) {
            $contador = substr_count($frase, $letra);

            echo "<div class='result'>";
            echo "<p><strong>La letra '$letra' aparece $contador veces en la frase.</strong></p>";
            echo "</div>";
        } else {
            echo "<div class='result'>";
            echo "<p><strong>Por favor ingrese una frase y una letra válida.</strong></p>";
            echo "</div>";
        }
    }
    ?>
</div>

</body>
</html>
