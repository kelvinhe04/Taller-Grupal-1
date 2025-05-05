<?php
// Función para mostrar un botón estilizado para volver al menú
function volverAlMenu($url) {
    echo "
    <div class='volver'>
        <a href='$url'>< Volver</a>
    </div>";
}

// Estructura HTML inicial
echo "<!DOCTYPE html><html lang='es'><head>
        <meta charset='UTF-8'>
        <title>Resultado Clasificación</title>
        <link rel='stylesheet' href='../estilo.css'>
    </head><body>";

// Mostrar botón para volver a la página anterior
volverAlMenu('Problema5.html');

// Verificar si el formulario fue enviado mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edades = $_POST['edades']; // Obtener las edades enviadas por el formulario

    echo "<div class='resultado-clasificacion'>";
    echo "<h2>Resultados de la clasificación:</h2>";

    // Inicializar contadores para cada categoría
    $contadores = [
        "Niño 👶" => 0,
        "Adolescente 🧒" => 0,
        "Adulto 🧑" => 0,
        "Adulto mayor 👴" => 0,
        "Edad inválida ❌" => 0
    ];

    // Recorrer todas las edades y clasificarlas
    foreach ($edades as $index => $edad) {
        if ($edad >= 0 && $edad <= 12) {
            $categoria = "Niño 👶";
        } elseif ($edad >= 13 && $edad <= 17) {
            $categoria = "Adolescente 🧒";
        } elseif ($edad >= 18 && $edad <= 64) {
            $categoria = "Adulto 🧑";
        } elseif ($edad >= 65) {
            $categoria = "Adulto mayor 👴";
        } else {
            $categoria = "Edad inválida ❌";
        }

        $contadores[$categoria]++; // Aumentar el contador de la categoría correspondiente

        $persona = $index + 1; // Número de la persona
        // Mostrar el resultado individual
        echo "Persona $persona (Edad: $edad): <strong style='color: #90ee90;'>$categoria</strong><br>";
    }

    // Mostrar un resumen de la clasificación
    echo "<h3 style='text-align: center; margin-top: 40px;'>Resumen:</h3>";

    foreach ($contadores as $categoria => $cantidad) {
        if ($cantidad > 0) {
            echo "$categoria: <strong style='color: #90ee90;'>$cantidad</strong><br>";
        }
    }
    echo "</div>";
}

// Incluir el footer al final de la página
include '../footer.php';

echo "</body></html>";
?>
