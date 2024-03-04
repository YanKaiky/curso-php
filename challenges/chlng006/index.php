<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Minimum wage</title>
</head>

<body>
    <?php
    $salary = (int) $_GET["salary"] ?? 0;
    const minimumWage = 1412;
    $quantity_minimum_wage = ceil(number_format($salary / minimumWage, 0)) ?? 1;
    $difference = ($salary - (minimumWage * $quantity_minimum_wage)) ?? 0;

    $phase = "";

    if ($salary > minimumWage) {
        $phase = "<p>Anyone who receives a salary of <strong>R$ $salary</strong> earns <strong>$quantity_minimum_wage</strong> minimum wages + </br><strong>R$ $difference</strong></p>";
    } elseif ($salary === minimumWage) {
        $phase = "<p>Anyone who receives a salary of <strong>R$ $salary</strong> earns <strong>1 minimum wage</strong></p>";
    } else {
        $phase = "<p>Anyone who receives a salary of <strong>R$ $salary</strong> earns less than 1 minimum wages</p>";
    }
    ?>

    <div class="content">
        <header>
            <h1>Enter your salary</h1>
        </header>

        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="input-box">
                    <label for="salary">Salary</label>
                    <input type="number" name="salary" id="salary" required value="<?= $salary ?>">

                    </br></br>
                    <p>Considering minimum wage <strong>R$ <?= number_format(minimumWage, 0, ',', '.') ?></strong></p>
                </div>

                <button type="submit">Analize</button>
            </form>
        </section>

        <section class="structure">
            <div>
                <h1>Result</h1>

                <div>
                    <?= $phase ?>
                </div>
            </div>
        </section>
    </div>
</body>

</html>