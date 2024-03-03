<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Data</title>
</head>
<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>

<body>
    <h1>Studing</h1>

    <?php
    date_default_timezone_set('America/Sao_Paulo');

    echo "Hoje é dia " . date("d/M/Y") . "</br>";

    echo "E a hora atual é " . date("G:i:s");
    ?>
</body>

</html>