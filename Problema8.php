
<?php
// ------------------------------------------------------------------
// Función para mostrar un botón estilizado que permite volver al menú
// ------------------------------------------------------------------
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
// Llamamos la función para que el botón aparezca al cargar la página
volverAlMenu('menu.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema #8</title>
    <style>
        /* Estilos generales del cuerpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 40px;
        }

        /* Título principal */
        h2 {
            text-align: center;
        }

        /* Estilos del formulario */
        form {
            max-width: 400px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        /* Campos de entrada de número */
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Botón de enviar */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Efecto hover del botón */
        input[type="submit"]:hover {
            background-color: #388e3c;
        }

        /* Resultado mostrado después de enviar */
        .resultado {
            text-align: center;
            margin-top: 30px;
            background-color: #fff;
            padding: 20px;
            border-left: 6px solid #4CAF50;
            border-radius: 5px;
        }

        /* Pie de página */
        footer {
            text-align: center;
            margin-top: 40px;
            color: #888;
        }
    </style>
</head>
<body>

<!-- Título del ejercicio -->
<h2>Determinar Estación del Año</h2>

<!-- Formulario para ingresar día y mes -->
<form method="post">
    <label for="dia">Día:</label>
    <input type="number" name="dia" id="dia" min="1" max="31" required>
    
    <label for="mes">Mes:</label>
    <input type="number" name="mes" id="mes" min="1" max="12" required>

    <input type="submit" value="Ver Estación">
</form>
<?php
// ------------------------------------------------------------------
// Si el usuario ha enviado el formulario
// ------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los valores ingresados por el usuario
    $dia = intval($_POST["dia"]);
    $mes = intval($_POST["mes"]);

    $estacion = ""; // Variable que almacenará el resultado

    // Determinamos la estación según la fecha ingresada (hemisferio sur)
    if (($mes == 12 && $dia >= 21) || ($mes == 1) || ($mes == 2) || ($mes == 3 && $dia <= 20)) {
        $estacion = "Verano";
    } elseif (($mes == 3 && $dia >= 21) || ($mes == 4) || ($mes == 5) || ($mes == 6 && $dia <= 21)) {
        $estacion = "Otoño";
    } elseif (($mes == 6 && $dia >= 22) || ($mes == 7) || ($mes == 8) || ($mes == 9 && $dia <= 22)) {
        $estacion = "Invierno";
    } elseif (($mes == 9 && $dia >= 23) || ($mes == 10) || ($mes == 11) || ($mes == 12 && $dia <= 20)) {
        $estacion = "Primavera";
    } else {
        $estacion = "Fecha no válida."; // En caso de una fecha fuera de rango (como 30/2)
    }

    // Mostramos el resultado en pantalla
    echo "<div class='resultado'>";
    echo "<h3>La estación es: <strong>$estacion</strong></h3>";
    echo "</div>";
}
?>
</body>
</html>
<?php
// ------------------------------------------------------------------
// Pie de página con la fecha actual
// ------------------------------------------------------------------
echo "<footer style='margin-top: 40px; font-style: italic;'>
        Fecha de ejecución: " . date('d/m/Y') . "
      </footer>";
?>
