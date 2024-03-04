<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Resultados</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
<h1>Resultado Final</h1>
</header>
<section>
    <?php 
        $Numero = $_GET["numero"] ?? 1;
        $ant = $Numero - 1;
        $suc = $Numero +1;

        echo "<ul>
        <li>O número escolhido foi <strong>$Numero</strong></li>
        <li>O seu antecessor é $ant</li>
        <li>O seu sucessor é $suc</li>
        </ul>";
    ?>
            <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
</section>
</body>
</html>