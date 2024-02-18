<?php 

$conn = mysqli_connect('localhost', 'root', '', 'contable');

if ($conn->connect_errno != null) {
    echo "Error número $conn->connect_errno conectando a la base de datos.<br>Mensaje: $conn->connect_error."; 
    exit();
 }
