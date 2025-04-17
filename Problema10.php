
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
// Mostrar el botón llamando la función
volverAlMenu('menu.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema #10</title>
    <style>
        /* Estilo general del cuerpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
        }

        /* Título */
        h2 {
            text-align: center;
            color: #444;
        }

        /* Estilo del formulario */
        form {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        /* Input numérico */
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Botón */
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

        /* Resultado */
        .resultado {
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-left: 5px solid #4CAF50;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
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

<h2>Múltiplos de 4</h2>

<!-- Formulario para pedir cuántos múltiplos mostrar -->
<form method="post">
    <label for="numero">¿Cuántos múltiplos de 4 deseas mostrar?</label>
    <input type="number" name="numero" id="numero" min="1" required>

    <input type="submit" value="Calcular">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["numero"]); // Convertimos a entero

    echo "<div class='resultado'>";
    echo "<h3>Los $n primeros múltiplos de 4:</h3>";
    echo "<ul>";

    // Bucle para calcular los múltiplos
    for ($i = 1; $i <= $n; $i++) {
        $multiplo = 4 * $i;
        echo "<li>4 × $i = $multiplo</li>";
    }

    echo "</ul>";
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
