<?php
// Definimos una clase que se encargará de calcular la suma de pares e impares
class SumaParesImpares {
    
    // Método estático para realizar el cálculo
    public static function calcular() {
        // Inicializamos un arreglo con las sumas de pares e impares en 0
        $resultado = [
            "pares" => 0,
            "impares" => 0
        ];

        // Recorremos los números del 1 al 200
        for ($i = 1; $i <= 200; $i++) {
            // Si el número es par, lo sumamos al acumulador de pares
            if ($i % 2 == 0) {
                $resultado["pares"] += $i;
            } else {
                // Si es impar, lo sumamos al acumulador de impares
                $resultado["impares"] += $i;
            }
        }

        // Indicamos que la respuesta será en formato JSON
        header('Content-Type: application/json');

        // Devolvemos el resultado como JSON
        echo json_encode($resultado);
    }
}

// Verificamos que la solicitud sea de tipo GET
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Llamamos al método que realiza el cálculo
    SumaParesImpares::calcular();
}
?>
