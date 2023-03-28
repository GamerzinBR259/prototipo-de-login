<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão</title>
</head>
<body>
  
<?php


$servername = "localhost"
$username = "id20489658_victor"
$password = "5[%t}f4[2b6{T7Ha"
$db = "id20489658_login"

$conn = new mysqli($servername,$username, $password, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
</body>
</html>