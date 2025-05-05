<?php
// Definimos la clase 'Calculadora' para manejar la operación de cálculo de la media
class Calculadora {
    // Método estático para calcular la media de 5 números
    public static function calcularMedia($datos) {
        // Creamos un arreglo vacío para almacenar los valores ingresados
        $valores = [];

        // Iteramos sobre los 5 números esperados
        for ($i = 1; $i <= 5; $i++) {
            // Verificamos si el número con el índice "i" está presente en los datos recibidos
            if (isset($datos["numero$i"])) {
                // Convertimos el valor a un número flotante
                $numero = floatval($datos["numero$i"]);

                // Verificar si el número es positivo
                if ($numero <= 0) {
                    // Si el número no es positivo, mostramos un mensaje de error y terminamos la ejecución
                    echo "<p style='color: red; text-align:center;'>El número $i debe ser positivo.</p>";
                    return;  // Termina la ejecución si hay un número no positivo
                }

                // Si el número es válido, lo añadimos al arreglo de valores
                $valores[] = $numero;
            }
        }

        // Si todos los valores son positivos, calculamos la media
        if (count($valores) === 5) {
            // Sumamos todos los valores del arreglo
            $suma = array_sum($valores);
            // Calculamos la media dividiendo la suma entre 5
            $media = $suma / 5;

            // Mostramos el resultado de la media
            echo "<h2 style='text-align:center;'>La media de los 5 números es: <span style='color: #90ee90;'>$media</span></h2>";
        } else {
            // Si no se ingresaron todos los 5 números, mostramos un mensaje de error
            echo "<p style='color: red; text-align:center;'>Por favor, ingrese los 5 números correctamente.</p>";
        }
    }
}

// Si se recibe una solicitud POST, es decir, si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Generamos el HTML de respuesta
    echo "<!DOCTYPE html><html><head><link rel='stylesheet' href='../estilo.css'></head><body>";
    // Incluimos un enlace para volver al formulario
    echo "<div class='volver'><a href='Problema1.html'>< Volver</a></div>";
    // Título de la página de resultados
    echo "<h1>Resultado</h1>";
    // Llamamos a la función que calculará la media y mostrará el resultado
    Calculadora::calcularMedia($_POST);

    // Incluir el footer
    include '../footer.php';  // Aquí se incluye el contenido del archivo footer.php

    // Cerramos el HTML generado
    echo "</body></html>";
}
?>
