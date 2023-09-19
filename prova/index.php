<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['usuario'] == 'portaria' and $_POST['senha'] == 'FatecAraras'){
        $_SESSION['loggedin'] = TRUE;
        header("location: principal.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Avaliação Desenvolvimento Web 2</title>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 850px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Cadastro de Estudantes no Estacionamento da FATEC Araras</h1>
        <h2>Acesso</h2>
        <h3>Inserir os Dados do login do Administrador</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>
    
</body>
</html>