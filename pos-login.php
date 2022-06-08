<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pos-login</title>
</head>
<body>
    <nav-bar>
        <a href="sair.php">Sair</a>
    </nav-bar>
    <h1>parabéns, cabeça de pika. Vc está logado.</h1>
</body>
</html>