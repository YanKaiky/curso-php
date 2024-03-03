<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,1000&display=swap" rel="stylesheet">
    <title>Currency converter</title>
</head>

<body>
    <div class="content">
        <header>
            <h1>Currency converter</h1>
        </header>

        <main>
            <?php
            $currency = $_GET["currency"] ?? 0;
            $dollar = 4.95;
            $euro = 5.37;

            echo "
            <p>
            A cotação do Dollar hoje está $dollar</br>
            A cotação do Euro hoje está $euro</br></br></br>

            Sua dinheiro <strong>R\$ " . number_format(floatval($currency), 2) . "</strong></br>
            Em Dollar está <strong>US\$ " . number_format(floatval($currency) * $dollar, 2) . "</strong></br>
            Em Euro está <strong>€ " . number_format(floatval($currency) * $dollar, 2) . "</strong></p>"
            ?>

            <a href="javascript:history.go(-1)">
                <button>Back page</button>
            </a>
        </main>
    </div>
</body>

</html>