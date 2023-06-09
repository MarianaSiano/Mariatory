<?php
//Arquivo para impedir o usuário de acessar a rota direto sem fazer autenticação

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die('Você não pode acessar esta página sem estar logado!');
}

?>