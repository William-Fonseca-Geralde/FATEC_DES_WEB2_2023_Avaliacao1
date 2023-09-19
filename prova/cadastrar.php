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
        <h1>Cadastro de Alunos ao Estacionamento</h1>
    </div>
    <div class="wrapper">
        <h4>Favor inserir:</h4>
        <form action="enviar.php" method="post">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" name="nome" id="nome" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label for="cpf">RA:</label>
                <input type="text" name="ra" id="ra" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label for="cpf">Placa do Veículo:</label>
                <input type="text" name="placa" id="placa" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
            
        </form>
        <a href="principal.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>