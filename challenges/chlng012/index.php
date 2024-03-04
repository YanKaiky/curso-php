<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Cash machine</title>
</head>

<body>
    <?php
    $value = $_GET["value"] ?? 0;
    $hundred = floor($value / 100) ?? 0;
    $fifty = floor(($value % 100) / 50) ?? 0;
    $ten = floor(($value % 50) / 10) ?? 0;
    $five = floor(($value % 10) / 5) ?? 0;
    ?>

    <div class="content">
        <header>
            <h1>Cash machine</h1>
        </header>

        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="input-box">
                    <label for="value">What amount do you want to withdraw</label>
                    <input type="number" name="value" id="value" step="5" required value="<?= $value ?>">
                </div>

                <div class="input-box">
                    <span>* Available notes R$ 100, R$ 50, R$ 10, R$ 5</span>
                </div>

                <button type="submit">Withdraw</button>
            </form>
        </section>

        <section class="structure">
            <div>
                <h1>Withdrawal of R$ <?= $value ?> carried out</h1>

                <div>
                    <p>
                        The ATM will give you the following notes:</br>

                        • Note out of <strong>100</strong> x<?= $hundred ?></br>
                        • Note out of <strong>50</strong> x<?= $fifty ?></br>
                        • Note out of <strong>10</strong> x<?= $ten ?></br>
                        • Note out of <strong>5</strong> x<?= $five ?>
                    </p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>