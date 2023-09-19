<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$handle = fopen("Alunos.txt", "r");
while (!feof($handle)) {
    $line = fgets($handle);
    echo $line ."<br>";
}
fclose($handle);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação Desenvolvimento Web 2</title>
</head>
<body>
    <a href="principal.php" class="btn btn-primary">Voltar</a>
</body>
</html>