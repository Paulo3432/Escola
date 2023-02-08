<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<tr><td><label> Aluno</label></td>
<?php
        include("../controle/conexao.php");
        $sql = 'SELECT * FROM aluno';    
print "<select name='cbx_aluno'>";
        foreach($conn->query($sql) as $row){
            print "<option value='".$row['cod_aluno']."'>".$row['nome_aluno']."</option>";
        }
        print "</select>";
        ?>
        
    </td></tr>                  
    
</body>
</html>