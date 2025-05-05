<?php
// Permitir acceso desde cualquier origen (útil en desarrollo o pruebas locales)
header("Access-Control-Allow-Origin: *");

// Indicar que la respuesta será en formato JSON
header("Content-Type: application/json");

// Leer los datos JSON enviados desde JavaScript mediante fetch
$input = json_decode(file_get_contents("php://input"), true);

// Obtener los valores de 'dia' y 'mes' desde el JSON recibido (si no existen, se pone 0)
$dia = intval($input["dia"] ?? 0);
$mes = intval($input["mes"] ?? 0);

// Variable que almacenará la estación calculada
$estacion = "";

// Días válidos por cada mes (sin contemplar años bisiestos)
$diasPorMes = [
    1 => 31, 2 => 28, 3 => 31, 4 => 30, 5 => 31, 6 => 30,
    7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31
];

// Validar si el mes y día son correctos según el calendario
if (!isset($diasPorMes[$mes]) || $dia < 1 || $dia > $diasPorMes[$mes]) {
    $estacion = "Fecha no válida.";
} else {
    // Determinar la estación del año con base en el mes y el día (hemisferio sur)
    if (
        ($mes == 12 && $dia >= 21) || ($mes == 1) || ($mes == 2) || ($mes == 3 && $dia <= 20)
    ) {
        $estacion = "Verano🌞🥵";
    } elseif (
        ($mes == 3 && $dia >= 21) || ($mes == 4) || ($mes == 5) || ($mes == 6 && $dia <= 21)
    ) {
        $estacion = "Otoño🍁";
    } elseif (
        ($mes == 6 && $dia >= 22) || ($mes == 7) || ($mes == 8) || ($mes == 9 && $dia <= 22)
    ) {
        $estacion = "Invierno⛄";
    } elseif (
        ($mes == 9 && $dia >= 23) || ($mes == 10) || ($mes == 11) || ($mes == 12 && $dia <= 20)
    ) {
        $estacion = "Primavera🌷";
    } else {
        // Si por alguna razón no cae dentro de ninguno de los rangos, se considera inválida
        $estacion = "Fecha no válida.";
    }
}

// Devolver la estación en formato JSON
echo json_encode(["estacion" => $estacion]);
?>
