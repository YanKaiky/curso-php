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
            $currency = round(floatval($_GET["currency"] ?? 0), 2);
            $access_key = "cb0b5555692c06db5a4aaba0";

            $apiUrl = "https://v6.exchangerate-api.com/v6/$access_key/latest/BRL";

            $response_json = file_get_contents($apiUrl);

            // Continuing if we got a result
            if (false !== $response_json) {
                // Try/catch for json_decode operation
                try {
                    // Decoding
                    $response = json_decode($response_json);

                    // Check for success
                    if ('success' === $response->result) {
                        // YOUR APPLICATION CODE HERE, e.g.
                        $EUR_price = round(($currency * $response->conversion_rates->EUR), 2);
                        $USD_price = round(($currency * $response->conversion_rates->USD), 2);

                        echo "
                        <p>Your money <strong>R\$ $currency</strong></br>
                        
                        Converted into Euro it is <strong>€ $EUR_price</strong></br>
                        Converted into Dollar it is <strong>RS\$ $USD_price</strong>
                        </p>";
                    }
                } catch (Exception $e) {
                    die($e);
                }
            }
            ?>

            <a href="javascript:history.go(-1)">
                <button>Back page</button>
            </a>
        </main>
    </div>
</body>

</html>