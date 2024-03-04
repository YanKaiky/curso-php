<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Anatomy of a division</title>
</head>

<body>
    <?php
    $dividend = $_GET["dividend"] ?? 1;
    $divider = $_GET["divider"] ?? 1;

    $rest = $dividend % $divider;
    $quotient = intdiv($dividend, $divider);
    ?>

    <div class="content">
        <header>
            <h1>Anatomy of a division</h1>
        </header>

        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="input-box">
                    <label for="dividend">Dividend</label>
                    <input type="number" name="dividend" id="dividend" required value="<?= $dividend ?>">
                </div>

                <div class="input-box">
                    <label for="divider">Divider</label>
                    <input type="number" name="divider" id="divider" required value="<?= $divider ?>">
                </div>

                <button type="submit">Send</button>
            </form>
        </section>

        <section class="structure">
            <div>
                <h1>Structure</h1>

                <div class="line">
                    <p><?= $dividend ?></p> <!-- Dividendo -->
                    <p><?= $divider ?></p> <!-- Divisor -->
                </div>

                <div class="line">
                    <p><?= $rest ?></p> <!-- Resto -->
                    <p><?= $quotient ?></p> <!-- Quociente -->
                </div>
            </div>
        </section>
    </div>
</body>

</html>