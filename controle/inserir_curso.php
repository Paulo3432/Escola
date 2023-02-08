<?php
include("conexao.php");
$curso = $_POST["txt_curso"];
$conn->query("INSERT INTO curso(nome_curso) VALUES ('$curso')");
echo "<a href='../formulario/associar_disciplina.php'>Selecionar Disciplina</a>";
//echo "<script>alert('Usuario Cadastrado com Sucesso')</script>
    //<a href='../index.html'>Voltar</a>";
?>