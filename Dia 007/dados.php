<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script>
function funcao1()
{
alert("Dados salvos!");
}
</script>
</head>
<body onload="funcao1()">
        <header>
                <h1>Resultados</h1>
        </header>
        <main>
                <?php 
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $senha = $_POST['senha'];
                        $aceita = $_POST['aceitas'] ?? "Não";

                        if ($aceita == "on") {
                                $aceita = "Aceitou";
                        }


                        $hostname = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "bdescola";

                        try {
                                $conn = new mysqli($hostname, $username, $password, $database);
                        } catch (Exception $e) {
                                die("Erro ao conectar: ".$e->getMessage());
                        }

                        

                        if ($conn -> error) {
                                die("Erro ao conectar!");
                        }

                        $sql1 = "INSERT INTO usuario (nome, email, senha, aceitas) VALUES ('$nome', '$email', '$senha', '$aceita')";

                        $conn->query($sql1);

                        $sql = 'SELECT * FROM usuario';

                        $resultado = $conn->query($sql);
                        
                        foreach ($resultado as $linha) {
                                echo "<li>";
                                foreach ($linha as $valor) {
                                        echo "<p>$valor</p>";
                                }
                                echo '</li><br>';
                        }

                ?>
                <button onclick="javascript:window.location.href='index.php'">Voltar</button>
        </main>
</body>
</html>