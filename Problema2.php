<?php
// Inicializamos la variable $suma en 0.
$suma = 0;

// Usamos un bucle for para recorrer los números del 1 al 1000.
for ($i = 1; $i <= 1000; $i++) {
    $suma += $i;
}


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

// Mostramos el resultado de la suma en pantalla.
echo "<h2>La suma de los números del 1 al 1000 es: $suma</h2>";



// Footer con la fecha del día
echo "<footer style='margin-top: 40px; font-style: italic;'>
        Fecha de ejecución: " . date('d/m/Y') . "
      </footer>";
?>
