<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menú Principal de Problemas</title>
    <style>
        /* Estilos generales de la página */
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f5f5f5;
        }

        /* Título principal centrado */
        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        /* Contenedor en forma de grid para acomodar las tarjetas */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        /* Estilos de cada tarjeta (card) */
        .card {
            background-color: white;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
            text-decoration: none;
            color: #333;
        }

        /* Efecto al pasar el mouse por encima */
        .card:hover {
            transform: scale(1.03);
            border-color: #333;
        }

        /* Texto en negrita */
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Título principal -->
    <h1>Menú Principal de Problemas</h1>

    <!-- Contenedor de las tarjetas -->
    <div class="grid">

        <!-- Cada tarjeta representa un problema -->
        <a class="card" href="Problema1.php">
            Calcular la media de los 5 primeros números positivos introducidos a partir de un formulario. 
            <br><br><span class="bold">Problema #1</span>
        </a>

        <a class="card" href="Problema2.php">
            Calcular la suma de los números del 1 al 1,000.
            <br><br><span class="bold">Problema #2</span>
        </a>

        <a class="card" href="Problema3.php">
            Escribir la suma de los 10 primeros números pares.
            <br><br><span class="bold">Problema #3</span>
        </a>

        <a class="card" href="Problema4.php">
            Se desea calcular independientemente la suma de los números pares e impares comprendidos entre 1 y 200.
            <br><br><span class="bold">Problema #4</span>
        </a>

        <a class="card" href="Problema5.php">
            Leer la edad de 5 personas y clasificar cada una en una categoría: niño (0-12), adolescente (13-17), adulto (18-64), adulto mayor (65+).
            <br><br><span class="bold">Problema #5</span>
        </a>

        <a class="card" href="Problema6.php">
            En un hospital existen tres áreas: Ginecología, Pediatría y Traumatología. El presupuesto anual del hospital se reparte conforme a la siguiente tabla.
            <br><br><span class="bold">Problema #6</span>
        </a>

        <a class="card" href="Problema7.php">
            <span class="bold">Calculadora de Datos Estadísticos</span><br><br>
            Pedir la cantidad de notas que desea ingresar el usuario. Luego pedir esas notas y calcular el promedio, la desviación estándar, la nota mínima y la máxima. Usar foreach (o un ciclo que recorra una colección).
            <br><br><span class="bold">Problema #7</span>
        </a>

        <a class="card" href="Problema8.php">
            <span class="bold">Estación del Año</span><br><br>
            Al ingresar el número de día y el número de mes, devolver la estación del año de acuerdo con la siguiente tabla (ver imagen).
            <br><br><span class="bold">Problema #8</span>
        </a>

        <a class="card" href="Problema9.php">
            Imprimir las 15 primeras potencias de 4 (4 elevado a la 1, 4 elevado a la 2, ...).
            <br><br><span class="bold">Problema #9</span>
        </a>

        <a class="card" href="Problema10.php">
            Imprimir los N primeros múltiplos de 4, donde N es un valor introducido por teclado. (Ej: 4×1=4, 4×2=8, ...).
            <br><br><span class="bold">Problema #10</span>
        </a>

    </div>
</body>
</html>
