<?php
// Función para mostrar un botón estilizado para volver al menú
function volverAlMenu($url) {
    echo "
    <div style='margin-top: 20px;'>
        <a href='$url' style='
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        ' onmouseover=\"this.style.backgroundColor='#45a049'\" onmouseout=\"this.style.backgroundColor='#4CAF50'\">
            ⬅️ Volver al menú principal
        </a>
    </div>";
}
volverAlMenu('menu.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema #8</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 40px;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #388e3c;
        }

        .resultado {
            text-align: center;
            margin-top: 30px;
            background-color: #fff;
            padding: 20px;
            border-left: 6px solid #4CAF50;
            border-radius: 5px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #888;
        }
    </style>
</head>
<body>

<h2>Determinar Estación del Año</h2>

<form method="post">
    <label for="dia">Día:</label>
    <input type="number" name="dia" id="dia" min="1" max="31" required>
    
    <label for="mes">Mes:</label>
    <input type="number" name="mes" id="mes" min="1" max="12" required>

    <input type="submit" value="Ver Estación">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = intval($_POST["dia"]);
    $mes = intval($_POST["mes"]);

    $estacion = "";

    if (($mes == 12 && $dia >= 21) || ($mes == 1) || ($mes == 2) || ($mes == 3 && $dia <= 20)) {
        $estacion = "Verano";
    } elseif (($mes == 3 && $dia >= 21) || ($mes == 4) || ($mes == 5) || ($mes == 6 && $dia <= 21)) {
        $estacion = "Otoño";
    } elseif (($mes == 6 && $dia >= 22) || ($mes == 7) || ($mes == 8) || ($mes == 9 && $dia <= 22)) {
        $estacion = "Invierno";
    } elseif (($mes == 9 && $dia >= 23) || ($mes == 10) || ($mes == 11) || ($mes == 12 && $dia <= 20)) {
        $estacion = "Primavera";
    } else {
        $estacion = "Fecha no válida.";
    }

    echo "<div class='resultado'>";
    echo "<h3>La estación es: <strong>$estacion</strong></h3>";
    echo "</div>";
}
?>


</body>
</html>

<?php
// Footer con la fecha del día
echo "<footer style='margin-top: 40px; font-style: italic;'>
        Fecha de ejecución: " . date('d/m/Y') . "
      </footer>";

?>