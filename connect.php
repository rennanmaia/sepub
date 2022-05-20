<?php


$server = "localhost";
$user = "root";
$pass = "";
$db = "publicidade";
$port = "3306";

$connection = mysqli_connect($server, $user, $pass, $db, $port);

if ($connection->connect_errno) {
  echo "Falha ao conectar ao MySQL";
}

mysqli_set_charset($connection, "utf8");