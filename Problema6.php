

<?php
// ----------------------------------------------
// Función para mostrar un botón estilizado que permite volver al menú principal
// ----------------------------------------------
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

// Llamada a la función para mostrar el botón
volverAlMenu('menu.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Problema #6</title>
    <style>
        /* Estilos generales del cuerpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            padding: 40px;
        }

        /* Estilo del título principal */
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

        /* Campo de número del presupuesto */
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
            background-color: #45a049;
        }

        /* Estilo para mostrar el resultado */
        .resultado {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-left: 6px solid #4CAF50;
            border-radius: 5px;
        }

        /* Pie de página */
        footer {
            text-align: center;
            margin-top: 50px;
            color: #888;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<!-- Título principal del formulario -->
<h2>Reparto de Presupuesto Hospitalario</h2>

<!-- Formulario para ingresar el presupuesto -->
<form method="post">
    <label for="presupuesto">Ingrese el presupuesto anual del hospital ($):</label>
    <input type="number" name="presupuesto" id="presupuesto" required min="1">
    <input type="submit" value="Calcular reparto">
</form>

<?php
// ----------------------------------------------
// Validación: si se envió el formulario y existe el valor de "presupuesto"
// ----------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["presupuesto"])) {
    // Convertimos el valor recibido a número decimal
    $presupuestoTotal = floatval($_POST["presupuesto"]);

    // Calculamos la distribución por departamentos
    $gineco = $presupuestoTotal * 0.40;     // 40% para Ginecología
    $trauma = $presupuestoTotal * 0.35;     // 35% para Traumatología
    $pediatria = $presupuestoTotal * 0.25;  // 25% para Pediatría

    // Mostramos el resultado con formato de dos decimales
    echo "<div class='resultado'>";
    echo "<h3>Resultado del Reparto:</h3>";
    echo "<ul>";
    echo "<li><strong>Ginecología:</strong> $" . number_format($gineco, 2) . "</li>";
    echo "<li><strong>Traumatología:</strong> $" . number_format($trauma, 2) . "</li>";
    echo "<li><strong>Pediatría:</strong> $" . number_format($pediatria, 2) . "</li>";
    echo "</ul>";
    echo "</div>";
}
?>

</body>
</html>

<?php
// ----------------------------------------------
// Footer que muestra la fecha actual de ejecución
// ----------------------------------------------
echo "<footer style='margin-top: 40px; font-style: italic;'>
        Fecha de ejecución: " . date('d/m/Y') . "
      </footer>";
?>
