<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pg.css">
    <title>Conversor de Temperatura</title>
</head>

<body>

    <h2>Conversor de Temperatura</h2>

    <form action="" method="post">
        <label for="temp_fahrenheit">Temperatura em Fahrenheit:</label>
        <input type="text" id="temp_fahrenheit" name="temp_fahrenheit" required><br><br>
        <button type="submit" name="converter">Converter</button>
    </form>

    <div class="resultado-wrapper">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["converter"])) {
            if (!empty($_POST["temp_fahrenheit"])) {
                // Obtem a temperatura em Fahrenheit do formulario
                $temp_fahrenheit = floatval($_POST["temp_fahrenheit"]);

                // Calcula a temperatura em Celsius
                $temp_celsius = ($temp_fahrenheit - 32) * (5 / 9);

                //Exibe
                echo "<div class='resultado'>";
                echo "<h3>Temperatura em Celsius:</h3>";
                echo "{$temp_fahrenheit} °F equivale a {$temp_celsius} °C";
                echo "</div>";
            } else {
                echo "<p class='error'>Por favor, insira a temperatura em Fahrenheit.</p>";
            }
        }
        ?>
    </div>

</body>

</html>