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
      Editar espaço 
      [
        <a href="index.php">Voltar</a>
      ]
    </h3>

    <?php

      $id = $_GET["id"];

      include_once("connect.php");

      if ($id != "") {
        $result = mysqli_query($connection, "SELECT * FROM espacos WHERE id = '$id'");

        if (mysqli_num_rows($result) == 1) {
          $row = $result->fetch_array();
          $id = $row["id"];
          $descricao = $row["descricao"];
        }
      } else {
        echo "<p>Você deve especificar um ID</p>";
      }
?>    

    <div class="div_form">
        <form action="editar_espaco.php" method="GET">
          <label for="id">ID</label>
          <input type="text" id="id" name="id" value="<?php echo $id; ?>" readonly>


          <label for="descricao">Descrição</label>
          <input type="text" id="descricao" name="descricao" value="<?php echo $descricao; ?>">

          <input type="submit" value="Alterar">
      </form>
    </div>




  </main>

  <footer>
  </footer>

</body>
</html>