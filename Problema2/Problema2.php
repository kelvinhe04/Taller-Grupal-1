<?php
// Inicializar la variable para almacenar la suma
$suma = 0;

// Usamos un bucle para sumar los números del 1 al 1000
for ($i = 1; $i <= 1000; $i++) {
    // Acumulamos el valor de $i en la variable $suma
    $suma += $i;
}

// Establecer que la respuesta será en formato JSON
header('Content-Type: application/json');

// Convertir el resultado (suma) en formato JSON y devolverlo
echo json_encode(["suma" => $suma]);
?>
