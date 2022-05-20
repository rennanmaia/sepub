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
    <h3>Cadastramento de novos espaços [<a href="index.php">Voltar</a>]</h3>

<?php

  $id = $_GET["id"];
  $descricao = $_GET["descricao"];

  if ( ($id != "") && ($descricao != "") ) {

    include_once("connect.php");

    $result = mysqli_query($connection, "UPDATE espacos SET descricao = '$descricao' WHERE id = '$id'");

    if ($result) {
      echo "<p>Espaço alterado com sucesso!</p>";
    } else {
      echo "<p>Erro ao alterar um espaço!</p>";
    }

  }

?>


  </main>

  <footer>
  </footer>

</body>
</html>