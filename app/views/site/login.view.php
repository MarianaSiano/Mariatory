<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel ="stylesheet" href="../../../public/css/login.css">
    <link rel="icon" type="image/png" href="/public/assets/Maristory-Navbar.png" sizes="32x32">
    <link href="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" rel='stylesheet'>
    <link rel="icon" type="image/png" href="/public/assets/Maristory-Navbar.png" sizes="32x32">

</head>

<body>
    <div>
        <a href="./"><img src="../../../public/assets/Maristory-Navbar-Transparente.png" alt="maristory logo"></a>
        <h1> Bem vinde! </h1>
        <form action="login/logar" method="POST">
            <input type="text" required name="email" placeholder="Nome do Usuário ou Email" autofocus>
            <br><br>
            <input type="password" required name="password" placeholder="Senha" id="senha" class="password">
            <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
            <br><br>
            <button> Entrar </button>
            <br><br>
            <p class="error"></p>
        </form>
    </div>

    <script src="../../../public/js/login.js"></script>
    <script>
        window.onload = function() {
            <?php if(isset($_SESSION['login_error'])): ?>
                alert(<?php echo json_encode($_SESSION['login_error']) ?>);
                <?php unset($_SESSION['login_error']) ?>
            <?php endif ?>
        };
    </script>
</body>
</html>
