<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
        <h1>Trabalhando com números aléatórios</h1>
    </header>
    <section>
        <form>
            <p>Grando um número aleatório entre 0 e 100...</p>
            <?php 
                $numero = rand(0,100);

                echo "<p>O valor foi <strong>$numero</strong></p>";
            ?>
            <a href="">Gerar outro</a>
        </form>
    </section>
</body>
</html>