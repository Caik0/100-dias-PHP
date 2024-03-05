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
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true); //Se estivesse false a variavel estaria armazenada em um objeto

        $cotacao = $dados["value"][0]["cotacaoCompra"];    

        $Numero = $_GET["numero"] ?? 1;

        $convert = round($Numero / $cotacao, 2);

        echo "<p>Seus R\$ ". number_format($Numero,2,",",".") ." equivalem a <strong>US$ ". number_format($convert,2,",",".") ."</strong></p>
        <p><strong>Cotação fixa de R\$ ". number_format($cotacao,2,",",".") ." informada diretamente no código</strong></p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </section>
</body>

</html>