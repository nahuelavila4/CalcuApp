<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet/generales.css">
    <link rel="stylesheet" href="./stylesheet/nuevo.css">
    <title>Nuevo gasto</title>
</head>
<body>
<div class="main">
    <div class="b">
        <?php require("partes/inc_header.php"); ?>
        <h2>Agregar un nuevo gasto</h2>
    </div>
    <div class="gastos_body">
        <form action="./functions/agregar_gasto.php" method="post">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <input type="text" name="categoria" placeholder="Categoria">
            <input type="number" name="importe" placeholder="Importe">
            <input type="date" name="fecha" placeholder="Fecha">
            <input type="submit" value="agregar">
        </form>
    </div>
    <br>
    <a href="index.php">Volver a inicio</a>
</div>
<?php require("partes/inc_pie.php"); ?>
<script src="./claro_oscuro.js"></script>
</body>
</html>