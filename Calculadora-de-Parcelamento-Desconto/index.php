<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pg.css">
    <title>Calculadora de Parcelamento e Desconto</title>
</head>

<body>

    <h2>Calculadora de Parcelamento e Desconto</h2>

    <form action="" method="post">
        <label for="valor_produto">Valor do Produto:</label>
        <input type="text" id="valor_produto" name="valor_produto" required><br><br>
        <button type="submit" name="calcular_parcelado">Calcular Parcelado</button>
        <button type="submit" name="calcular_desconto">Calcular Desconto</button>
    </form>

    <div class="resultado-wrapper">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["valor_produto"])) {
                $valor_produto = floatval($_POST["valor_produto"]);

                if (isset($_POST["calcular_parcelado"])) {
                    // Calcula o valor total com acrescimo de 16% e divide em 10 parcelas
                    $valor_total = $valor_produto * 1.16;
                    $valor_parcela = $valor_total / 10;


                    echo "<div class='resultado'>";
                    echo "<h3>Resultados do Parcelamento:</h3>";
                    echo "Valor da Parcela: R$ " . number_format($valor_parcela, 2, ',', '.') . "<br>";
                    echo "Valor Total da Compra: R$ " . number_format($valor_total, 2, ',', '.');
                    echo "</div>";
                } elseif (isset($_POST["calcular_desconto"])) {
                    // Calcula o desconto de 7%
                    $desconto = $valor_produto * 0.07;
                    $valor_com_desconto = $valor_produto - $desconto;


                    echo "<div class='resultado'>";
                    echo "<h3>Resultados do Desconto:</h3>";
                    echo "Valor Original: R$ " . number_format($valor_produto, 2, ',', '.') . "<br>";
                    echo "Valor do Desconto (7%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
                    echo "Valor com Desconto: R$ " . number_format($valor_com_desconto, 2, ',', '.');
                    echo "</div>";
                }
            } else {
                echo "<p class='error'>Por favor, insira o valor do produto.</p>";
            }
        }
        ?>
    </div>

</body>

</html>