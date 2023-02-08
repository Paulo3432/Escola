<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Exclusoes de Professor</h3>
<div class="flex-container">
    <div id="box" class="barra">
    <form method="post" action="../controle/del_professor.php">
    <fieldset>

            <tr><td><label> Professor</label></td>
            <td><?php
           include("../controle/conexao.php");
           $sql = 'SELECT * FROM professor';
           print "<select name='cbx_professor'>";
           foreach($conn->query($sql) as $row){
               print "<option value='".$row['cod_professor']."'>".$row['nome_professor']."</option>";
           }
           print "</select>";
           ?>
       </td></tr>
       <tr><td colspan="2" align="right"><input type="submit" value="Excluir"></td></tr>

</body>
</html>