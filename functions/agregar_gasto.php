<?php
include('../db.php');

$query = 'INSERT INTO gastos (fecha, importe, descripcion, categoria)
            VALUES (?, ?, ?, ?)';

$preparar = $conn->prepare($query);
$preparar->bind_param(
    'sdss',
    $_POST['fecha'],
    $_POST['importe'],
    $_POST['descripcion'],
    $_POST['categoria']
);

if ($preparar->execute()) {
    echo "El registro ha sido ingresado correctamente";
} else {
    echo "hubo un error al ingresar el registro ". mysqli_error($conn);
}   
$preparar->close();
include("../db_cerrar.php");
header('Location: ../listado.php');
