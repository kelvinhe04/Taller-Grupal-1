
<?php

// Función para calcular el reparto del presupuesto entre las diferentes áreas
function calcularReparto($presupuestoTotal) {
    // Reparto del presupuesto: 40% para ginecología, 35% para traumatología y 25% para pediatría
    $gineco = $presupuestoTotal * 0.40;   // 40% para ginecología
    $trauma = $presupuestoTotal * 0.35;   // 35% para traumatología
    $pediatria = $presupuestoTotal * 0.25; // 25% para pediatría

    // Devolver los resultados formateados a dos decimales
    return [
        'gineco' => number_format($gineco, 2),   // Formatear el valor de ginecología
        'trauma' => number_format($trauma, 2),   // Formatear el valor de traumatología
        'pediatria' => number_format($pediatria, 2) // Formatear el valor de pediatría
    ];
}

// Comprobar si el formulario fue enviado con el presupuesto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["presupuesto"])) {
    // Obtener el presupuesto enviado desde el formulario y convertirlo a un número flotante
    $presupuestoTotal = floatval($_POST["presupuesto"]);
    
    // Llamar a la función para calcular el reparto y almacenar los resultados
    $resultados = calcularReparto($presupuestoTotal);
    
    // Establecer la cabecera de la respuesta como tipo JSON
    header('Content-Type: application/json');
    
    // Devolver los resultados del reparto como un objeto JSON
    echo json_encode($resultados);
} else {
    // Si no se recibe un presupuesto válido, devolver un error en formato JSON
    echo json_encode(["error" => "No se recibió un presupuesto válido."]);
}
?>
