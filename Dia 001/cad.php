<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>
            Resultado do processamento
        </h1>
        <main>
            <?php 
                //Existem variáveis globais que ja vem definidads no código ($_POST, $_GET, $_COOKIES, $_REQUEST => sendo essa uma junção de todas)
                $nome = $_GET["name"] ?? "pessoa";
                $sobrenome = $_GET["sobrenome"] ?? "desconhecida";
                echo "É um prazer te conhecer, <strong>$nome $sobrenome </strong>! Este é o meu site!";
            ?>
        </main>
        <a id="btn-back" href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </header>
</body>
</html>