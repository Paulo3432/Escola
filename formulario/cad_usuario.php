<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Escola</title>
 
</head>
<body>
    <h3>Cadastro de Usuario</h3>

<div class="flex-container">
    <div id="box" class="barra">
    <form method="post" action="../controle/inserir_usuario.php">
    <fieldset>
<table>
            <tr><td><label> Usuario</label></td><td><input type ="text" name="txt_user" required></td></tr>
            <tr><td><label> Bairro</label></td>
            <td><?php
           include("../controle/conexao.php");
           $sql = 'SELECT * FROM bairro';
           print "<select name='cbx_bairro'>";
           foreach($conn->query($sql) as $row){
               print "<option value='".$row['cod_bairro']."'>".$row['NOME_BAIRRO']."</option>";
           }
           print "</select>";
           ?>
       </td></tr>
            <tr><td><label> Email</label></td><td><input type ="email" name="txt_mail" required></td></tr>
            <tr><td><label>Senha</label></td><td><input type ="password" name="txt_pass" required></td></tr>
            <tr><td><label>Confirmar Senha</label></td><td><input type ="password" name="txt_conf" required></td></tr>            
            <tr><td colspan="2" align="right"><input type="submit" value="Cadastrar"></td></tr>
</table>
</fieldset> 
    </form>
 
</body>
</html>