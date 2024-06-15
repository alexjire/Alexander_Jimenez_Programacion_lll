<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio Telefónico</title>
    <style>
        body {
            background-color: #00FFFF;
            color: black;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
      
    </style>
</head>
<body>
<div class="container">
    <h1>Directorio Telefónico</h1>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Teléfono</th><th>Email</th></tr>
        <?php
        $directorio = [
            ["id" => 1, "nombre" => "José Jiménez", "telefono" => "89551066", "email" => "alexjire@gmail.com"],
            ["id" => 2, "nombre" => "Mariana Correa", "telefono" => "89105596", "email" => "marCorrea1@gmail.com"],
            ["id" => 3, "nombre" => "yaneth Rodriguez", "telefono" => "60228056", "email" => "jrodriguez@hotmail.com"],
            ["id" => 4, "nombre" => "Maritza Martínez", "telefono" => "70128563", "email" => "marmartinez12@gmail.com"]
        ];
        foreach ($directorio as $entrada) {
            echo "<tr><td>{$entrada['id']}</td><td>{$entrada['nombre']}</td><td>{$entrada['telefono']}</td><td>{$entrada['email']}</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
