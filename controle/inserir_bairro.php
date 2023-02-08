<?php
include("conexao.php");
$bairro = $_POST["txt_bairro"];
$conn->query("INSERT INTO bairro(nome_bairro) VALUES ('$bairro')");
echo "<script>alert('Usuario Cadastrado com Sucesso')</script>
    <a href='../index.html'>Voltar</a>";
?>