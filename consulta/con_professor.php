<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<tr><td><label> Professor</label></td>
<?php
        include("../controle/conexao.php");
        $sql = 'SELECT * FROM professor';    
print "<select name='cbx_professor'>";
        foreach($conn->query($sql) as $row){
            print "<option value='".$row['cod_professor']."'>".$row['nome_professor']."</option>";
        }
        print "</select>";
        ?>
        
    </td></tr>                  
    
</body>
</html>