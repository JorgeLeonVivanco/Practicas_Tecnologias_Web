<!DOCTYPE html>
<html>
<head>
    <title>Funciones</title>
</head>
<body>
    <?php
    function validarEdadSexo($edad, $sexo) 
    {
        if ($sexo == "femenino" && $edad >= 18 && $edad <= 35) {
            return "Bienvenida, usted está en el rango de edad permitido.";
        } else {
            return "Lo sentimos, usted no cumple con los requisitos.";
        }
    }
    ?>
    <?php
function crearParqueVehicular() {
    return array(
        'UBN6338' => array(
            'Auto' => array(
                'marca' => 'HONDA',
                'modelo' => 2020,
                'tipo' => 'camioneta'
            ),
            'Propietario' => array(
                'nombre' => 'Alfonzo Esparza',
                'ciudad' => 'Puebla, Pue.',
                'direccion' => 'C.U., Jardines de San Manuel'
            )
        ),
        'UBN6339' => array(
            'Auto' => array(
                'marca' => 'MAZDA',
                'modelo' => 2019,
                'tipo' => 'sedan'
            ),
            'Propietario' => array(
                'nombre' => 'Ma. del Consuelo Molina',
                'ciudad' => 'Puebla, Pue.',
                'direccion' => '97 oriente'
            )
        )
        // Agrega más registros aquí
    );
}

function mostrarParqueVehicular($parqueVehicular) {
    echo "<pre>";
    print_r($parqueVehicular);
    echo "</pre>";
}

function consultarPorMatricula($parqueVehicular, $matricula) {
    $matriculaConsultada = strtoupper($matricula);
    if (array_key_exists($matriculaConsultada, $parqueVehicular)) {
        return $parqueVehicular[$matriculaConsultada];
    } else {
        return "Matrícula no encontrada.";
    }
}
?>
</body>
</html>
