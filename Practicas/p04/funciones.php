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

</body>
</html>
