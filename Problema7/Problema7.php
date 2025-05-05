<?php
// Especificar que la respuesta será en formato JSON
header('Content-Type: application/json');

// Verificar que la petición es de tipo POST y que se enviaron notas
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['notas'])) {
    $notas = $_POST['notas']; // Obtener el arreglo de notas desde el formulario

    $notasValidas = []; // Arreglo para almacenar solo las notas válidas (números)
    foreach ($notas as $n) {
        // Verificar que cada nota sea numérica
        if (is_numeric($n)) {
            $notasValidas[] = floatval($n); // Convertir a número flotante y agregar al arreglo
        }
    }

    // Asegurarse de que hay al menos dos notas válidas para poder calcular estadísticos
    if (count($notasValidas) > 1) {
        $suma = array_sum($notasValidas); // Calcular la suma total de las notas
        $promedio = $suma / count($notasValidas); // Calcular el promedio

        $sumatoria = 0; // Variable para acumular la suma de los cuadrados de las diferencias al promedio
        foreach ($notasValidas as $n) {
            $sumatoria += pow($n - $promedio, 2); // Diferencia al cuadrado
        }

        // Calcular la desviación estándar con fórmula de muestra
        $desviacion = sqrt($sumatoria / (count($notasValidas) - 1));

        // Obtener la nota mínima y máxima
        $minima = min($notasValidas);
        $maxima = max($notasValidas);

        // Enviar los resultados como JSON
        echo json_encode([
            "notas" => $notasValidas,
            "promedio" => round($promedio, 2),
            "desviacion" => round($desviacion, 2),
            "minima" => $minima,
            "maxima" => $maxima
        ]);
    } else {
        // Si no hay suficientes notas válidas
        echo json_encode(["error" => "Se requieren al menos 2 notas válidas."]);
    }
} else {
    // Si no se enviaron los datos correctamente
    echo json_encode(["error" => "Datos no válidos."]);
}
