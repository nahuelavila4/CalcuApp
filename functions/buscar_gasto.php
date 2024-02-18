<?php
include('../db.php');
$descrip = $_POST['descripcion'];
$query = "SELECT * FROM gastos WHERE descripcion = '$descrip'";
$resultado = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/generales.css">
    <title>Datos gasto</title>
</head>
<body>
    <div class="main">
        <div class="b">
            <?php require("../partes/inc_header.php");
            if ($resultado->num_rows > 0) {
                $row = $resultado->fetch_assoc();
                ?>
                <div class="gastos_encontrados">
                    <p><span>ID: </span>
                        <?php echo $row['id'] ?>
                    </p>
                    <p><span>Descripcion: </span>
                        <?php echo $row['descripcion'] ?>
                    </p>
                    <p><span>Categoria: </span>
                        <?php echo $row['categoria'] ?>
                    </p>
                    <p><span>Importe: </span>
                        <?php echo $row['importe'] ?>
                    </p>
                    <p><span>Fecha: </span>
                        <?php echo $row['fecha'] ?>
                    </p>
                </div>
                <?php
            } else {
                echo 'No se han encontrado registros <br>';
            }
            ?>
            <a href="../index.php">Volver a inicio</a>
        </div>
    </div>
    <?php require("../partes/inc_pie.php"); ?>
</body>

</html>