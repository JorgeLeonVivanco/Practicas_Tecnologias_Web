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

</body>
</html>