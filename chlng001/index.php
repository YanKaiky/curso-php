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
    <div class="content">
        <header>
            <h1>Random Numbers</h1>
        </header>

        <section>
            <?php
            $number = rand(1, 1000);
            echo "<p>Generating a random number between <strong>1</strong> and <strong>1000</strong>...</br>The generated number was <strong id='num'>$number</strong></p>";
            ?>

            <button onclick="location.reload()">Generate</button>
        </section>
    </div>
</body>

</html>