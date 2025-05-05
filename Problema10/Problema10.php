<?php
// Verificar si el método de la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del número enviado desde el formulario y convertirlo a un entero
    $n = intval($_POST["numero"]);

    // Verificar si el número es menor que 1, en cuyo caso se muestra un mensaje de error
    if ($n < 1) {
        echo "<p>Por favor, introduce un número válido mayor que cero.</p>";
        exit; // Detener la ejecución del script si el número no es válido
    }

    // Mostrar el encabezado con el número de múltiplos solicitados
    echo "<h3>Los $n primeros múltiplos de 4:</h3>";
    
    // Comenzar una lista desordenada para mostrar los múltiplos
    echo "<ul>";
    
    // Generar y mostrar los primeros 'n' múltiplos de 4
    for ($i = 1; $i <= $n; $i++) {
        // Calcular el múltiplo de 4
        $multiplo = 4 * $i;
        
        // Mostrar el múltiplo dentro de un elemento de lista
        echo "<li>4 × $i = $multiplo</li>";
    }
    
    // Cerrar la lista desordenada
    echo "</ul>";
}
?>
