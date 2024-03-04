<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Square Root</title>
</head>

<body>
    <?php
    $number = $_GET["number"] ?? 1;
    $square_root = sqrt($number);
    $root_cubic = $number ** (1 / 3);
    ?>

    <div class="content">
        <header>
            <h1>Choose a number</h1>
        </header>

        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="input-box">
                    <label for="number">Number</label>
                    <input type="number" name="number" min="1" id="number" required value="<?= $number ?>">
                </div>

                <button type="submit">Analize</button>
            </form>
        </section>

        <section class="structure">
            <div>
                <h1>Result</h1>

                <div>
                    <p>Analyzing the number <?= $number ?> we have</p>
                    <ul>
                        <li>Its Square Root of <?= $square_root ?></li>
                        <li>Its Cube Root of <?= $root_cubic ?></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</body>

</html>