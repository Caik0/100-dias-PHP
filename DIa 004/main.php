<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Resultados</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>Resultado Final</h1>
<section>
    <?php 
        $Numero = $_GET["numero"] ?? 1;
        const COT = 4.95;
        $convert = round($Numero / COT, 2);

        echo "<p>Seus R$ $Numero equivalem a <strong>US$ $convert</strong></p>
        <p><strong>Cotação fixa de R$ 4,95 informada diretamente no código</strong></p>";
    ?>
            <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
</section>
</body>
</html>