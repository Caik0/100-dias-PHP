<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto 007</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form action="dados.php" method="post">
    <h1>Cadastro</h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="nome">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Digite seu email aqui.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Senha</label>
      <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" name="aceitas" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Aceitas?</label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</body>

</html>