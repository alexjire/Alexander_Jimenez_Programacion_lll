<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Animales</title>
    <style>
        body {
            background-color: #008000;
            color: black;
            text-align: center;
            margin: 10px;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
        }
        button {
            background-color: #7CFC00;
            color: black;
            text-align: center;
            margin: 4px 2px;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 12px;
            padding: 12px 20px;
        }
        input[type="text"] {
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-group {
            color: black;
            text-align: center;
            margin: 10px;
            font-family: 'Arial', sans-serif;
            font-size: 22px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        select {
            width: 200px;
            height: 40px;
            font-size: 22px;
            font-weight: bold;
        }
        
        .resultado {
            font-size: 24px; 
            font-weight: bold;
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <h1>FORMULARIO PARA ANIMALES</h1>

    <?php
   
    $resultado = '';

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombreAnimal = htmlspecialchars($_POST['nombreAnimal']);
        $tipoAnimal = htmlspecialchars($_POST['tipoAnimal']);

        
        function hacerSonido($tipoAnimal) {
            if ($tipoAnimal == 'gato') {
                return "¡Miau! ¡Miau!";
            } elseif ($tipoAnimal == 'perro') {
                return "¡Guau! ¡Guau!";
            } else {
                return "Desconocido";
            }
        }

        
        $resultado .= "<div class='resultado'>";
        $resultado .= "<h2>Resultado</h2>";
        $resultado .= "<p>El animal " . $nombreAnimal . " hace: " . hacerSonido($tipoAnimal) . "</p>";
        $resultado .= "</div>";
    }
    ?>

    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="nombreAnimal">Nombre del animal:</label>
            <input type="text" id="nombreAnimal" name="nombreAnimal" required>
        </div>
        
        <div class="form-group">
            <label for="tipoAnimal">Tipo de animal:</label>
            <select id="tipoAnimal" name="tipoAnimal" required>
                <option value="gato">Gato</option>
                <option value="perro">Perro</option>
            </select>
        </div>
        
        <button type="submit">Crear animal</button>
    </form>

    
    <?php echo $resultado; ?>
</body>
</html>
