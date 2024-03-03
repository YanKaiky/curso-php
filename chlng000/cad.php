<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Data</title>
</head>

<body>
    <header>
        <h1>Result data</h1>
    </header>

    <main>
        <?php
        $number = $_GET["number"] ?? 0;

        echo "<p>Chosen number was <strong>$number</strong></br>Predecessor number is <strong>" . ($number - 1) . "</strong></br>Successor number is <strong>" . ($number + 1) . "</strong></p>";
        ?>

        <a href="javascript:history.go(-1)">
            <button>Back page</button>
        </a>
    </main>
</body>

</html>