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

// Footer con la fecha del día
echo "<footer style='margin-top: 40px; font-style: italic;'>
        Fecha de ejecución: " . date('d/m/Y') . "
      </footer>";

?>