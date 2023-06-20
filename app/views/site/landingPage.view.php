<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vinde!</title>

    <link rel="stylesheet" href="../../../public/css/landingPage.css">
    <link rel="icon" type="image/png" href="/public/assets/Maristory-Navbar.png" sizes="32x32">

</head>

<body>

    <!--import da navbar-->
    <?php require('./app/views/layouts/navbar.php'); ?>

    <div class="paginicial">

        <div class="upper-content">

            <div class="telinha">
                <img src="../../../public/assets/telinha.png" width="620">
            </div>
            <div class="upper-content-text">

                <h1>Olá, leitor(a)!</h1>
                <h2>Somos maristory,<br>um site de feedbacks de livros.</h2>
                <h3 class="pagina-inicial">Aqui você pode avaliar os livros, fazer resumos, dar sua opinião,<br> deixar suas recomendações e ainda ver
                    o feedback de outros leitores.</h3>
            </div>


        </div>


        <div class="post-list">
            <?php foreach ($posts as $post) : ?>

                <div class="post">

                    <div class="imagem">
                        <img src=<?= '../../../' . ($post->image ?? 'public/images/posts/comprovante.png') ?> alt="capa do livro">
                    </div>
                    <div class="alinhamento">
                        <h3 class="titulosesquerda"> Título </h3>
                        <p> <?php echo $post->title ?? 'Desconhecido' ?> </p>
                    </div>
                    <div class="alinhamento">
                        <h3 class="titulosesquerda"> Autor </h3>
                        <p> <?php echo $post->author_book ?? 'Desconhecido' ?> </p>
                    </div>
                    <div class="alinhamento">
                        <h3 class="titulosesquerda"> Gênero </h3>
                        <div class="classificacao">
                            <?php foreach (explode(',', $post->gender) ?? [] as $gender) : ?>
                                <p class="elementos"> <?php echo $gender; ?> </p>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="alinhamento">
                        <h3 class="titulosesquerda"> Avaliação </h3>
                        <p id="estrelas">
                            <?php if ($post->rating == 0) : ?>
                                &star;&star;&star;&star;&star;
                            <?php elseif ($post->rating == 1) : ?>
                                &starf;&star;&star;&star;&star;
                            <?php elseif ($post->rating == 2) : ?>
                                &starf;&starf;&star;&star;&star;
                            <?php elseif ($post->rating == 3) : ?>
                                &starf;&starf;&starf;&star;&star;
                            <?php elseif ($post->rating == 4) : ?>
                                &starf;&starf;&starf;&starf;&star;
                            <?php elseif ($post->rating == 5) : ?>
                                &starf;&starf;&starf;&starf;&starf;
                            <?php endif; ?>
                        </p>
                    </div>

                    <div>
                        <a href="vpost2?id=<?php echo $post->id ?>"><button class="button-card" role="button">Saber Mais</button></a>
                    </div>


                </div>

            <?php endforeach; ?>
        </div>


    </div>

    <!--import do footer-->
    <?php require('./app/views/layouts/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script>
        Swal.fire('Any fool can use a computer')
    </script> -->
</body>

</html>