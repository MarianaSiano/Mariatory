<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" rel='stylesheet'>

</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <img src="/public/assets/Maristory-Navbar-Transparente.png" alt="Maristory logo">
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="./landingPage" class="nav-link">Página Inicial</a></li>
                    <li class="nav-item"><a href="./postList" class="nav-link">Posts</a></li>
                    <li class="nav-item"><a href="./login" class="nav-link">Login</a></li>
                </ul>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" id="icon" src="/public/assets/menu_purple_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">Página Inicial</a></li>
                <li class="nav-item"><a href="./postList" class="nav-link">Posts</a></li>
                <li class="nav-item"><a href="./login" class="nav-link">Login</a></li>
            </ul>

        </div>
    </header>

    <script src="./public/js/navbar.js"></script>
</body>

</html>