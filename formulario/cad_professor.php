<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Escola</title>
 
</head>
<body>
    <h3>Cadastro de professor</h3>

<div class="flex-container">
    <div id="box" class="barra">
    <form method="post" action="../controle/inserir_professor.php">
    <fieldset>
<table>
            <tr><td><label> Professor</label></td><td><input type ="text" name="txt_professor" required></td></tr>
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
                       
            <tr><td colspan="2" align="right"><input type="submit" value="Cadastrar"></td></tr>
</table>
</fieldset> 
    </form>
 
</body>