<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Avaliação Desenvolvimento Web 2</title>
</head>
<body>
    <div class="page-header">
        <h1>Bem Vindo Administrador</h1>
    </div>
    <p>
        <a href="cadastrar.php" class="btn btn-primary">Cadastrar Alunos</a>
        <br><br>
        <a href="lista.php" class="btn btn-primary">Mostrar Alunos</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>