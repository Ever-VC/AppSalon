<?php
function obtener_servicios() {
    try {
        // Importa la conexión con la base de datos
        require_once 'database.php';

        // Consulta para obtener todos los servicios
        $consulta = "SELECT * FROM servicios;";

        // Consultar la base de datos
        $resultado = mysqli_query($db, $consulta);
        
        mysqli_close($db);

        return $resultado;
    } catch (\Throwable $th) {
        var_dump($th);
    }
}

//obtener_servicios();