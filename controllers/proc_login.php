<?php
session_start();

function login($usuario, $senha){
    if ($usuario === 'welison' && $senha === '1234'){
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;
        header('Location: ../painel.php');
        exit();
    }else{
        $_SESSION['erro'] = 'Usuário ou senha inválido!';
        header('Location: ../login.php');
        exit();
    }    
}


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

login($usuario, $senha);






?>