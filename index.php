<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">

  <title>SEPUB</title>
</head>
<body>
  <header>
    <h1>Sistema de controle de espaços publicitários - SEPUB</h1>
  </header>

  <main>
    <h3>
      Espaços publicitários 
      [
        <a href="frm_cadastrar_novo_espaco.php">Novo</a>
      ]
    </h3>

    <table>
      <tr>
        <th>Id</th>
        <th>Descrição</th>
        <th>Alterar</th>
        <th>Excluir</th>
      </tr>

<?php 

  include_once("connect.php");

  $result = mysqli_query($connection, "SELECT * FROM espacos");

  while ($row = $result->fetch_array()) {
    $id = $row["id"];
    $descricao  = $row["descricao"];

    echo "
      <tr>
        <td>
          $id
        </td>
        <td>
          <a href='detalhes_espaco.php?id=$id'>$descricao</a>
        </td>
        <td>
          <a href='frm_editar_espaco.php?id=$id'>Editar</a>
        </td>
        <td>
          <a href='#' onclick='excluir($id)'>Excluir</a>          
        </td>
      </tr>
    ";
  }


?>

    </table>
  </main>

  <footer>
  </footer>

  
</body>
</html>

<script>
  function excluir(id) {
    if (window.confirm('Tem certeza que voce deseja excluir este espaço?')) {
      window.location = "excluir_espaco.php?id=" + id;
    }
  }
</script>