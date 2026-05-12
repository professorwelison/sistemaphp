<?php
include_once('funcoes.php');

if (session_status() === PHP_SESSION_NONE){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Início</a>
            <?php if (isset($_SESSION['logado'])): ?>
                <a href="painel.php">Painel</a>
                <a href="controllers/proc_logout.php">Sair</a>
            <?php else: ?>
                <a href="login.php">Entrar</a>
            <?php endif; ?>

        </nav>
    </header>