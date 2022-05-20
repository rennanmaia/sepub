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
    <h3>Detalhes de um espaço [<a href="index.php">Voltar</a>]</h3>

  <?php

    $id = $_GET["id"];

    include_once("connect.php");

    if ($id != "") {
      $result = mysqli_query($connection, "SELECT * FROM espacos WHERE id = '$id'");

      if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_array();
        $id = $row["id"];
        $descricao = $row["descricao"];

        echo "<p>ID: " . $id . "</p>";
        echo "<p>DESCRIÇÃO: " . $descricao . "</p>"; 
      }

    } else {
      echo "<p>Você deve especificar um ID</p>";
    }

  ?>


  </main>

  <footer>
  </footer>

</body>
</html>