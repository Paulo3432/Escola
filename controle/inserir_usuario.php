<?php
include("conexao.php");
$user = $_POST["txt_user"];
$bairro= $_POST["cbx_bairro"];
$mail = $_POST["txt_mail"];
$pass = ($_POST["txt_pass"]);
$conf = ($_POST["txt_conf"]);


if($pass<>$conf){
        echo "<script>alert('Senhas não conferem')</script>
        <a href='../formulario/cad_usuario.php'>Voltar</a>";
        
}else{
    $conn->query("INSERT INTO usuario(usuario,email,senha,bairro) VALUES ('$user','$mail','$pass',$bairro)"); 
    echo "<script>alert('Usuario Cadastrado com Sucesso')</script>
    <a href='../index.html'>Voltar</a>";
}
?>