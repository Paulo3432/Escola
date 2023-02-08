
<?php
include("conexao.php");
$professor = $_POST["cbx_professor"];
$conn->query("DELETE FROM professor (nome_professor) WHERE id = ('$professor')");

//echo "<script>alert('Usuario Excluido com Sucesso')</script>
    //<a href='../index.html'>Voltar</a>";

//$conn->query("DELETE FROM professor(nome_professor) WHERE VALUES ('$professor')");
?>

