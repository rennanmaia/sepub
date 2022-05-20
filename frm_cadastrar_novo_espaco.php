<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEPUB</title>
</head>
<body>
  <header>
    <h1>Sistema de controle de espaços publicitários - SEPUB</h1>
  </header>

  <main>
    <h3>
      Cadastrar novo espaço 
      [
        <a href="index.php">Voltar</a>
      ]
    </h3>

    <div class="div_form">
        <form action="cadastrar_novo_espaco.php" method="GET">
          <label for="descricao">Descrição</label>
          <input type="text" id="descricao" name="descricao" placeholder="Digite a descrição do espaço...">

          <input type="submit" value="Cadastrar">
      </form>
    </div>




  </main>

  <footer>
  </footer>

</body>
</html>