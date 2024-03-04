<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Price adjustment</title>
</head>

<body>
    <?php
    $price = $_GET["price"] ?? 0;
    $percent = $_GET["percent"] ?? 1;
    $adjustment_percentage = $price + (($price * $percent) / 100);
    ?>

    <div class="content">
        <header>
            <h1>Price adjustment</h1>
        </header>

        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="input-box">
                    <label for="price">Product price R$</label>
                    <input type="number" name="price" id="price" required value="<?= $price ?>">
                </div>

                <div class="input-box">
                    <label for="percent">Adjustment percentage <span id="percent-value"><strong>(<?= $percent ?>%)</strong></span></label>
                    <input type="range" min="1" max="100" name="percent" min="1800" max="2100" id="percent" required value="<?= $percent ?>">
                </div>

                <button type="submit">Analize</button>
            </form>
        </section>

        <section class="structure">
            <div>
                <h1>Result</h1>

                <div>
                    <p>
                        The product that cost R$ <?= $price ?> with a <?= $percent ?>% increase will cost R$ <?= $adjustment_percentage ?> from now on
                    </p>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.getElementById('percent').addEventListener('input', function() {
            document.getElementById('percent-value').innerText = this.value + '%';
        });
    </script>
</body>

</html>