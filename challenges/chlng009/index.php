<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Age calculation</title>
</head>

<body>
    <?php
    date_default_timezone_set('America/Sao_Paulo');

    $year_birth = $_GET["year_birth"] ?? 2002;
    $year = $_GET["year"] ?? date('Y');
    $age = $year - $year_birth;
    ?>

    <div class="content">
        <header>
            <h1>Age calculation</h1>
        </header>

        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="input-box">
                    <label for="year_birth">Year Birth</label>
                    <input type="number" name="year_birth" min="1800" max="2100" id="year_birth" required value="<?= $year_birth ?>">
                </div>

                <div class="input-box">
                    <label for="year">Selected Year</label>
                    <input type="number" name="year" min="1800" max="2100" id="year" required value="<?= $year ?>">
                </div>

                <button type="submit">Analize</button>
            </form>
        </section>

        <section class="structure">
            <div>
                <h1>Result</h1>

                <div>
                    <p>Anyone born in <?= $year_birth ?> will be <strong><?= $age ?> years old</strong> in <?= $year ?></p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>