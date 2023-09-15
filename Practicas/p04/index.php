<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 4</title>
</head>
<body>

    <h2>Ejercicio 1: Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</h2>
    <?php
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
        }
    ?>

    <h2>Ejercicio 2:Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
    secuencia compuesta por: impar,par,impar.</h2>
    <?php
    function generarNumeroAleatorio() 
    {
        return rand(1, 1000); //Función para generar un número aleatori y el rango
    }
    function esSecuenciaValida($secuencia) 
    {
        return $secuencia[0] % 2 != 0 && $secuencia[1] % 2 == 0 && $secuencia[2] % 2 != 0;
    }    // Función para verificar si la secuencia es impar, par, impar
    $matriz = [];
    $iteraciones = 0;
    $numerosGenerados = 0;
    while (true) 
    {  // Bucle para generar la matriz
        $numerosGenerados++;
        $secuencia = [generarNumeroAleatorio(), generarNumeroAleatorio(), generarNumeroAleatorio()];
        if (esSecuenciaValida($secuencia))
        {
            $matriz[] = $secuencia;
            $iteraciones++;
            if ($iteraciones == 4) // Cambia el número de iteraciones deseado
                { 
                    break;
                }
        }
    }
    // Mostrar la matriz como una tabla
    echo "<table border='1'>";
    foreach ($matriz as $fila) 
    {
        echo "<tr>";
        foreach ($fila as $valor) 
        {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "$numerosGenerados números generados en $iteraciones iteraciones";
    ?>

    <h2>Ejercicio 3: Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
        pero que además sea múltiplo de un número dado. El número dado se debe obtener vía GET.</h2>
    <?php
    if (isset($_GET['numero'])) 
    {
        $numero_dado = (int)$_GET['numero'];
    } else 
    {
        echo "Por favor, proporciona un número dado a través de la solicitud GET.";
        exit;
    }

    $encontrado = false;
    $numero_aleatorio = 0;

    while (!$encontrado) 
    {
        $numero_aleatorio = rand(1, 1000); // Puedes ajustar el rango según tus necesidades
        
        if ($numero_aleatorio % $numero_dado == 0) 
        {
            $encontrado = true;
        }
    }
    echo "El primer número entero aleatorio múltiplo de $numero_dado es: $numero_aleatorio";
    ?>

    <h2>Ejercicio 3.1: Utiliza un ciclo do-while para encontrar el primer número entero obtenido aleatoriamente,
    pero que además sea múltiplo de un número dado.
    El número dado se debe obtener vía GET.</h2>

    <?php
    // Obtener el número dado a través de la solicitud GET
    if (isset($_GET['numero'])) {
        $numero_dado = (int)$_GET['numero'];
    } else {
        echo "Por favor, proporciona un número dado a través de la solicitud GET.";
        exit;
    }
    $encontrado = false;
    $numero_aleatorio = 0;
    do {
        $numero_aleatorio = rand(1, 1000); // Puedes ajustar el rango según tus necesidades
        
        if ($numero_aleatorio % $numero_dado == 0) {
            $encontrado = true;
        }
    } while (!$encontrado);
    echo "El primer número entero aleatorio múltiplo de $numero_dado es: $numero_aleatorio";
    ?>


    <h2>Ejercicio 4: Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’
    a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner
    el valor en cada índice.</h2>
    <p><h2>Crea el arreglo con un ciclo for</h2></p>
    <p><h2>Lee el arreglo y crea una tabla en XHTML con echo y un ciclo foreach</h2></p>

    <?php
    // Crear el arreglo con un ciclo for
    $arreglo = [];
    for ($codigo = 97; $codigo <= 122; $codigo++) {
        $letra = chr($codigo);
        $arreglo[$codigo] = $letra;
    }

    // Generar la tabla XHTML con un ciclo foreach
    echo "<table border='1'>";
    echo "<tr><th>Índice</th><th>Valor</th></tr>";
    foreach ($arreglo as $indice => $valor) {
        echo "<tr>";
        echo "<td>[$indice]</td>";
        echo "<td>$valor</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>