<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet/generales.css">
    <title>Lista de gastos</title>
</head>

<body>
    <div class="main">
        <div class="b">
            <?php require("partes/inc_header.php"); ?>
            <h2>Lista de gastos</h2>
            <!-- Curso como usar mysqli -->
        </div>
        <div class="gastos_encontrados">
            <ul>
                <?php
                $query = 'SELECT * FROM gastos';
                $resultado = mysqli_query($conn, $query);
                if ($resultado->num_rows > 0) {
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                        <form method="post">
                            <li>
                                <p><span>ID: </span>
                                    <?php echo $mostrar['id'] ?>
                                </p>
                                <p><span>Descripcion: </span>
                                    <?php echo $mostrar['descripcion'] ?>
                                </p>
                                <p><span>Categoria: </span>
                                    <?php echo $mostrar['categoria'] ?>
                                </p>
                                <p><span>Importe: </span>
                                    <?php echo $mostrar['importe'] ?>
                                </p>
                                <p><span>Fecha: </span>
                                    <?php echo $mostrar['fecha'] ?>
                                </p>
                                <input type="submit" name="editar" value="Editar">
                                <input type="submit" name="eliminar" value="Eliminar">
                            </li>
                            <hr>
                            <?php
                            if (isset($_POST["eliminar"])) {
                                header("Location: ./functions/eliminar_gasto.php?id=" . $mostrar['id']);
                            } else if (isset($_POST["editar"])) {
                                header("Location: ./functions/editar_gasto.php?id=" . $mostrar['id']);
                            }
                    }
                } else {
                    echo 'No se han encontrado registros';
                } ?>
                </form>

            </ul>
            <br>
            <a href="index.php">Volver a inicio</a>
        </div>
    </div>
    <?php require("partes/inc_pie.php"); ?>
    <script src="./claro_oscuro.js"></script>

</body>

</html>