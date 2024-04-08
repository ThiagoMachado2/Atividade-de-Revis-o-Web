<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Metros para Centímetros</title>
    <link rel="stylesheet" type="text/css" href="pg.css">
</head>

<body>

    <h2>Conversor de Metros para Centímetros</h2>

    <form action="" method="post">
        <label for="metros">Metros:</label>
        <input type="text" id="metros" name="metros" required><br><br>
        <button type="submit" name="converter">Converter</button>
    </form>

    <div class="resultado-wrapper">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["converter"])) {
            if (!empty($_POST["metros"])) {
                // Obtem a quantidade de metros do formulario
                $metros = floatval($_POST["metros"]);

                // Converte metros para centimetros
                $centimetros = $metros * 100;

                // Exibe
                echo "<div class='resultado'>";
                echo "<h3>Resultado:</h3>";
                echo "{$metros} metros equivalem a {$centimetros} centímetros";
                echo "</div>";
            } else {
                echo "<p class='error'>Por favor, insira a quantidade de metros.</p>";
            }
        }
        ?>
    </div>

</body>

</html>