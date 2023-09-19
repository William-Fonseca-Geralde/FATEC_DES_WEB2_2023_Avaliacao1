<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$filename = "Alunos.txt";

if(!file_exists("Alunos.txt")){
    $handle = fopen("Alunos.txt", "w");
} else {
    $handle = fopen("Alunos.txt", "a");
}
        
fwrite($handle, $_POST['nome']." | ".$_POST['ra']." | ".$_POST['placa']);
fwrite($handle, "\n");
fflush($handle);
fclose($handle);

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Avaliação Desenvolvimento Web 2</title>
</head>
<body>
    <a href="cadastrar.php" class="btn btn-primary">Voltar</a>
</body>
</html>