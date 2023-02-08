<?php
include("conexao.php");

$user = $_POST["txt_user"];
$pass = md5($_POST["txt_pass"]);

echo $user;
echo $pass;

$sql = "SELECT * FROM usuario WHERE usuario = $user";
$result = $conn->query($sql);

$row= $result->fetch(PDO::FETCH_ASSOC);
$usuario = $row[usuario];
$senha = $row[senha];
?>