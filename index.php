<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <link href="css/custom.css" rel="stylesheet">
        <title>Сегодняшняя дата</title>
    </head>
    <body>
        <p>Сегодняшняя дата (согласно данному веб-серверу):
            <?php
            echo date('l, F jS Y.');
            ?>
        </p>
    </body>
</html>