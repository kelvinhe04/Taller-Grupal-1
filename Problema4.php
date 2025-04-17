<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema #4</title>
</head>
<body>


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


// Inicializamos las variables de suma
$sumaPares = 0;
$sumaImpares = 0;

// Recorremos del 1 al 200
for ($i = 1; $i <= 200; $i++) {
    if ($i % 2 == 0) {
        // Si es par, se suma a sumaPares
        $sumaPares += $i;
    } else {
        // Si es impar, se suma a sumaImpares
        $sumaImpares += $i;
    }
}

// Mostramos los resultados
echo "<h2>Suma de los números pares entre 1 y 200: $sumaPares</h2>";
echo "<h2>Suma de los números impares entre 1 y 200: $sumaImpares</h2>";

// Footer con la fecha del día
echo "<footer style='margin-top: 40px; font-style: italic;'>
        Fecha de ejecución: " . date('d/m/Y') . "
      </footer>";

?>
    
</body>
</html>

