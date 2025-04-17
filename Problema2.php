
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema #2</title>
</head>
<body>

<?php
// ------------------------------
// Función para mostrar un botón estilizado que lleva al menú principal
// ------------------------------
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

// Llamamos a la función para mostrar el botón de regreso al menú
volverAlMenu('menu.php');

// ------------------------------
// Cálculo de la suma del 1 al 1000
// ------------------------------

// Inicializamos la variable suma con valor 0
$suma = 0;

// Usamos un bucle for para recorrer todos los números del 1 al 1000
for ($i = 1; $i <= 1000; $i++) {
    $suma += $i; // Sumamos el valor de $i a $suma en cada iteración
}

// Mostramos el resultado final en pantalla
echo "<h2>La suma de los números del 1 al 1000 es: $suma</h2>";

// ------------------------------
// Mostrar la fecha de ejecución como pie de página
// ------------------------------
echo "<footer style='margin-top: 40px; font-style: italic;'>
        Fecha de ejecución: " . date('d/m/Y') . "
      </footer>";
?>

</body>
</html>
