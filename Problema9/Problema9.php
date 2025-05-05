<?php
// Permitir acceso desde cualquier origen (útil para desarrollo local o peticiones desde otras rutas)
header("Access-Control-Allow-Origin: *");

// Indicar que la respuesta será en formato JSON
header("Content-Type: application/json");

// Inicializamos un arreglo para guardar las potencias
$potencias = [];

// Generar las 15 primeras potencias de 4 (desde 4^1 hasta 4^15)
for ($i = 1; $i <= 15; $i++) {
    // Por cada valor de i, se calcula 4 elevado a i y se guarda junto con el exponente
    $potencias[] = [
        "exponente" => $i,           // El exponente actual
        "valor" => pow(4, $i)        // El resultado de 4 elevado a ese exponente
    ];
}

// Convertimos el arreglo a formato JSON y lo devolvemos como respuesta
echo json_encode($potencias);
?>
