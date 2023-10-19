<?php
include_once __DIR__.'/database.php';

// SE OBTIENE LA INFORMACIÓN DEL PRODUCTO ENVIADA POR EL CLIENTE
$producto = file_get_contents('php://input');
if (!empty($producto)) {
    // SE TRANSFORMA EL STRING DEL JSON A OBJETO
    $jsonOBJ = json_decode($producto);

    // VALIDAR SI EL PRODUCTO YA EXISTE
    $nombreProducto = $jsonOBJ->nombre;
    $query = "SELECT * FROM nombre_de_tu_tabla WHERE nombre = '$nombreProducto' AND eliminado = 0";
    $result = mysqli_query($tu_conexion, $query);

    if ($result) {
        // Verificar si ya existe un producto con el mismo nombre y no está eliminado
        if (mysqli_num_rows($result) > 0) {
            echo '[SERVIDOR] Error: El producto ya existe.';
        } else {
            // EL PRODUCTO NO EXISTE, PROCEDER CON LA INSERCIÓN
            $queryInsert = "INSERT INTO nombre_de_tu_tabla (nombre, otra_columna, ...) VALUES ('$nombreProducto', '$otro_valor', ...)";
            $resultInsert = mysqli_query($tu_conexion, $queryInsert);

            if ($resultInsert) {
                echo '[SERVIDOR] Éxito: Producto insertado correctamente.';
            } else {
                echo '[SERVIDOR] Error al insertar el producto.';
            }
        }
    } else {
        echo '[SERVIDOR] Error en la consulta SQL.';
    }
}
?>
