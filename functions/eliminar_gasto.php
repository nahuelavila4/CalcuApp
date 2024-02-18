<?php
include("../db.php");

$registro = $_GET['id'];
$query = "DELETE FROM gastos WHERE id='$registro'";

if ($resultado = mysqli_query($conn, $query)) {
    header("Location: ../index.php");
    echo "Registro eliminado";
} else {
    echo "Error al eliminar registro: " . mysqli_error($conn);
}

include("../db_cerrar.php");
?>
<a href="../index.php">Volver a inicio</a>