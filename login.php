<?php
    require_once('includes/header.php');

    if(isset($_SESSION['logado'])){
        header('Location: painel.php');
        exit();
    }
?>
<main>
    <h1>Login de usuário</h1>
    <form action="controllers/proc_login.php" method="post" class='form_login'>
        <input type="text" name="usuario" id="" placeholder="Login">
        <input type="password" name="senha" id="" placeholder="Senha">
        <input type="submit" value="Entrar">
    </form>
</main>


<?php
    require_once('includes/footer.php');
?>