<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Real Number Analyzer</title>
</head>

<body>
    <div class="content">
        <header>
            <h1>Real Number Analyzer</h1>
        </header>

        <main>
            <?php
            $number = str_replace(',', '.', ($_GET["number"] ?? 0));

            echo "
            <p>With number <strong>$number</strong></br></br>
                • The entire part is <strong>" . number_format(intval($number), 0, ',', '.') . "</strong></br>
                • The fractional part is <strong>" . fmod($number, 1) . "</strong>
            </p>";
            ?>

            <a id='page' href="javascript:history.go(-1)">
                <button>Back page</button>
            </a>
        </main>
    </div>
</body>

</html>