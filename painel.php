<?php
    require_once('includes/header.php');

    if(!isset($_SESSION['logado'])){
        header('Location: login.php');
        exit();
    }
?>
<main>
    <h1>Painel de usuário</h1>
    <p>Olá, <?= htmlspecialchars($_SESSION["usuario"]) ?></p>
</main>


<?php
    require_once('includes/footer.php');
?>