<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Forms</title>
</head>

<body>
    <?php
    $value1 = $_GET["v1"] ?? 0;
    $value2 = $_GET["v2"] ?? 0;
    ?>

    <h1>Add values</h1>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Value 1</label>
            <input type="number" name="v1" id="v1" required value="<?= $value1 ?>" />

            <label for="v2">Value 2</label>
            <input type="number" name="v2" id="v2" required value="<?= $value2 ?>" />

            <button type="submit">Add</button>
        </form>
    </main>

    <section>
        <h2>Result</h2>

        <p><?= ($value1 + $value2) ?></p>
    </section>
</body>

</html>