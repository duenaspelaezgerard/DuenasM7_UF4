<?php

    include_once("abstract.databoundobject.php");
    include_once("class.nasa.php");
    include_once("class.pdofactory.php");

    $strDSN = "pgsql:dbname=m7uf4;host=localhost;port=5432";
    $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres",array());
    $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $objNasa = new Nasa($objPDO, 1);
?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalles de la API Earth</title>
    </head>
    <body>
        <h1>Detalles de la API Earth</h1>
        <table border="1">
            <tr>
                <td>ID API</td>
                <td><?php echo $objNasa->getIdApi(); ?></td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><?php echo $objNasa->getDate(); ?></td>
            </tr>
            <tr>
                <td>Dataset</td>
                <td><?php echo $objNasa->getDataset(); ?></td>
            </tr>
            <tr>
                <td>Planeta</td>
                <td><?php echo $objNasa->getPlanet(); ?></td>
            </tr>
            <tr>
                <td>Versión del servicio</td>
                <td><?php echo $objNasa->getServiceVersion(); ?></td>
            </tr>
        </table>
    </body>
    </html>






