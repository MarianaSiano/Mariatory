<?php
//Arquivo para impedir o usuário de acessar a rota direto sem fazer autenticação

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    header('Location: /login');
    $_SESSION['login_error'] = 'Você precisa estar logado para acessar a página!';
}

?>