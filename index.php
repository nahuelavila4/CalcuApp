<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet/generales.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../stylesheet/header_footer.css?v=<?php echo time(); ?>" />
    <script src="/js/functions.js?v=<?php echo time(); ?>"></script>
    <title>CalculApp</title>
</head>
<body>
<div class="main">
    <div class="b">
        <?php require("partes/inc_header.php"); ?>
        <p>Primero elige una opcion:</p>
        <a href="buscar.php">Buscar un gasto</a>
        <br>
        <a href="listado.php">Lista de gastos</a>
        <br>
        <a href="nuevo.php">Agregar nuevo gasto</a>
    </div>
</div>
<?php require("partes/inc_pie.php"); ?>
<script src="./claro_oscuro.js"></script>

</body>
</html>