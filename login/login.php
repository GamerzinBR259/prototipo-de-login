<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="login.php" method="post">

<form>
    <input type="text" name="Nome" id="Nome"><br><br>
    <input type="text" name="Senha" id="Senha"><br><br>
    <input type="submit" name="Enviar" id="Enviar">
</form>

<?php

include 'conexao.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome =  mysqli_real_escape_string($conn, $_POST["Nome"]);
$senha = mysqli_real_escape_string($conn, $_POST["Senha"]);

$sql = "SELECT id FROM registros WHERE Nome = '$nome' AND Senha = '$senha'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows === 1) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION["user_id"] = $row["id"];

  echo "Bem-Vindo!";

  header("Location: cadastro.php");
  exit();
} else {
  // Exibe uma mensagem de erro caso o usuário e senha não correspondam a um registro
  $login_error = "Nome de usuário ou senha inválidos.";
  echo $login_error;
  }
}


?>

</body>
</html>