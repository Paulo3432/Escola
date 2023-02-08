
<?php
include("conexao.php");
$aluno = $_POST["txt_aluno"];
$bairro = $_POST["cbx_bairro"];
echo "<script>alert('Usuario Cadastrado com Sucesso')</script>
    <a href='../index.html'>Voltar</a>";

$conn->query("INSERT INTO aluno(nome_aluno,bairro_aluno) VALUES ('$aluno','$bairro')");
?>