<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Arithmetic Means</title>
</head>

<body>
    <?php
    $first_value = (int) $_GET["first_value"] ?? 0;
    $first_weight = (int) $_GET["first_weight"] ?? 1;
    $second_value = (int) $_GET["second_value"] ?? 0;
    $second_weight = (int) $_GET["second_weight"] ?? 1;

    $simple_arithmetic_mean = number_format((($first_value + $second_value) / 2) ?? 0, 2, ',', '.');
    $weighted_arithmetic_mean = number_format((($first_value * $first_weight) + ($second_value * $second_weight)) / ($first_weight + $second_weight), 2, ',', '.');
    ?>

    <div class="content">
        <header>
            <h1>Arithmetic Means</h1>
        </header>

        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="input-box">
                    <label for="first_value">First Value</label>
                    <input type="number" name="first_value" id="first_value" required value="<?= $first_value ?>">
                </div>

                <div class="input-box">
                    <label for="first_weight">First Weight</label>
                    <input type="number" name="first_weight" id="first_weight" required value="<?= $first_weight ?>">
                </div>

                <div class="input-box">
                    <label for="second_value">Second Value</label>
                    <input type="number" name="second_value" id="second_value" required value="<?= $second_value ?>">
                </div>

                <div class="input-box">
                    <label for="second_weight">Second Weight</label>
                    <input type="number" name="second_weight" id="second_weight" required value="<?= $second_weight ?>">
                </div>

                <button type="submit">Analize</button>
            </form>
        </section>

        <section class="structure">
            <div>
                <h1>Result</h1>

                <div>
                    <p>
                        Analisando so valores <?= $first_value ?> e <?= $second_value ?></br>

                        • A <strong>Média Aritmética Simples</strong> entre <?= $first_value ?> e <?= $second_value ?> é <?= $simple_arithmetic_mean ?></br>
                        • A <strong>Média Aritmética Ponderada</strong> com pesos <?= $first_weight ?> e <?= $second_weight ?> é igual a <?= $weighted_arithmetic_mean ?>
                    </p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>