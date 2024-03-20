<?php
	require 'conexion/database.php';
    $db = new Database();
    $con = $db->conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Empleados</title>
    <!-- Agregar enlaces a los archivos CSS y JavaScript de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Registro de Usuarios</h1>
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Fecha de Ingreso</th>
                <th>Atraccion Favorita</th>
                <th>Comida</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Consulta de Empleados
            $consulta = "SELECT * FROM ingreso ORDER BY ingreso.Fecha_ingreso" ;
            $resultado = $con->query($consulta);

            while ($fila = $resultado->fetch()) {
                echo '
                <tr>
                    <td>' . $fila["Documento"] . '</td>
                    <td>' . $fila["Nombre"] . '</td>
                    <td>' . $fila["Apellido"] . '</td>
                    <td>' . $fila["Correo"] . '</td>
                    <td>' . $fila["Telefono"] . '</td>
                    <td>' . $fila["Fecha_ingreso"] . '</td>
                    <td>' . $fila["Id_juego"] . '</td>
                    <td>' . $fila["Id_comida"] . '</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
    <div class="row mt-3">
        <div class="col-md-6 text-start">
            <form action="index.php">
                <input type="submit" value="Regresar" class="btn btn-secondary"/>
            </form>
        </div>
    </div>
</div>
</body>
</html>