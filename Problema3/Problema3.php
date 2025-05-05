<?php
// Definimos la clase para la lógica de la suma de los primeros 10 números pares
class Calculadora {
    // Método estático para calcular la suma
    public static function calcularSumaPares() {
        // Inicializamos la variable para la suma
        $suma_pares = 0;

        // Usamos un bucle para sumar los primeros 10 números pares (0, 2, 4, ..., 18)
        for ($i = 0; $i < 10; $i++) {
            $suma_pares += 2 * $i;
        }

        // Devolvemos el resultado en forma de arreglo asociativo
        return ["suma" => $suma_pares];
    }
}

// Verificamos si la solicitud se realizó mediante el método GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Indicamos que el tipo de contenido de la respuesta será JSON
    header('Content-Type: application/json');

    // Llamamos al método de la clase y devolvemos el resultado codificado en JSON
    echo json_encode(Calculadora::calcularSumaPares());
}
?>
