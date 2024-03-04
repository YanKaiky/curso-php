<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Time Calculator</title>
</head>

<body>
    <?php
    $field_seconds = $_GET["field_seconds"] ?? 0;
    $minutes = floor($field_seconds / 60) ?? 0;
    $seconds = $field_seconds % 60 ?? 0;
    $hours = floor($minutes / 60) ?? 0;
    $days = floor($hours / 24) ?? 0;
    $weeks = floor($days / 7) ?? 0;
    ?>

    <div class="content">
        <header>
            <h1>Time Calculator</h1>
        </header>

        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="input-box">
                    <label for="field_seconds">Total seconds</label>
                    <input type="number" name="field_seconds" id="field_seconds" required value="<?= $field_seconds ?>">
                </div>

                <button type="submit">Analize</button>
            </form>
        </section>

        <section class="structure">
            <div>
                <h1>Result</h1>

                <div>
                    <p>
                        Analyzing the value you entered, <strong><?= $field_seconds ?> seconds</strong>, equivalent to a total of:</br>

                        • <strong><?= $weeks ?></strong> semanas;</br>
                        • <strong><?= $days ?></strong> dias;</br>
                        • <strong><?= $hours ?></strong> horas;</br>
                        • <strong><?= $minutes ?></strong> minutos;</br>
                        • <strong><?= $seconds ?></strong> segundos,
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