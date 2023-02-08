<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Acessar conta</h3>

<div class="flex-container">
    <div id="box" class="barra">
    <form method="post" action="../controle/inserir_usuario.php">
    <fieldset>
    <table>
            <tr><td><label> Usuario</label></td><td><input type ="text" name="txt_user"></td></tr>
            <tr><td><label> Email</label></td><td><input type ="text" name="txt_mail"></td></tr>           
        <tr><td colspan="2" align="right"><input type="submit" value="Cadastrar"></td></tr>
</fieldset>  
</talbe>
    
</body>
</html>