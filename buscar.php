<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet/generales.css">
    <title>Buscar</title>
</head>

<body>
    <div class="main">
        <div class="b">
            <?php require("partes/inc_header.php"); ?>
            <form method="post" action="./functions/buscar_gasto.php">
                <h2>Buscar un gasto especifico</h2>
                <input type="text" name="descripcion" placeholder="Ingresar descripcion de gasto">
                <input type="submit" name="buscar" value="buscar">
            </form>
            <br>
            <a href="index.php">Volver a inicio</a>
        </div>
    </div>
    <?php require("partes/inc_pie.php"); ?>
</body>

</html>