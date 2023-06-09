<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maristory</title>

    <link rel="stylesheet" href="../../../public/css/landingPage.css">

</head>

<body>
    <!--Dar um require parecido com esse toda vez que você quiser incluir uma nav, footer ou sidebar-->
    <?php require('./app/views/layouts/navbar.php'); ?>

    <div class="paginicial">

        <div class="upper-content">

            <div class="upper-content-text">

                <h1>Olá, leitor(a)!</h1>
                <h2>Somos maristory,<br>um site de feedbacks de livros.</h2>
                <h3 class="pagina-inicial">Aqui você pode avaliar os livros, fazer resumos, dar sua opinião,<br> deixar suas recomendações e ainda ver
                    o feedback de outros leitores.</h3>
            </div>

            <div class="telinha">
                <img src="../../../public/assets/telinha.png" width="620">
            </div>
        </div> <!--FIM upper-content-->


        <ul>
            <li>
                <div class="post">
                    <a href="#">
                        <img src="../../../public/assets/livro1.png" alt="Livro O pequeno principe" width="210" ;>
                    </a>
                </div>
            </li>

            <li>
                <div class="post">
                    <a href="#">
                        <img src="../../../public/assets/livro2.png" alt="Livro Harry Potter e a pedra filosofal" width="210">
                    </a>
                </div>
            </li>

            <li>
                <div class="post">
                    <a href="#">
                        <img src="../../../public/assets/livro3.png" alt="Livro Outros jeitos de usar a boca" width="210">
                    </a>
                </div>
            </li>

            <li>
                <div class="post">
                    <a href="#">
                        <img src="../../../public/assets/livro4.png" alt="Livro Percy jackson e os olimpianos" width="210">
                    </a>
                </div>
            </li>

            <li>
                <div class="post">
                    <a href="#">
                        <img src="../../../public/assets/livro5.png" alt="Livro frenesi historias de duplo terror" width="210">
                    </a>
                </div>
            </li>
        </ul>


    </div>
    <?php require('./app/views/layouts/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire('Any fool can use a computer')
    </script>
</body>

</html>