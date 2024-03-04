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
        $Numero = $_GET["numero"] ?? 1.5;
        $int = (int) $Numero ;
        $fra = $Numero - $int;

        echo "<p>O número a ser analisado é <strong>". number_format($Numero,3,",",".") ."</strong></p>
        <p><strong>A parte inteira do número é ". number_format($int,0,",",".")."</strong></p>
        <p><strong>A parte fracionária do número é ". number_format($fra,3,",",".")."</strong></p>";
    ?>
            <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
</section>
</body>
</html>