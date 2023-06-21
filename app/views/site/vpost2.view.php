<!DOCTYPE html>
<html lang="en">

<head>
    <title>Resenha - TÍTULO DO LIVRO AQUI</title>

    <link rel="stylesheet" href="../../../public/css/vpost2.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/public/assets/Maristory-Navbar.png" sizes="32x32">

</head>

<body>
    <?php
    if (!isset($post) || empty($post)) {
        $post = new stdclass();
    }
    ?>

    <!--import da navbar-->
    <?php require('./app/views/layouts/navbar.php'); ?>

    <div class="tudo">
        <div class="conteudo">
            <div class="esquerda">
                <div class="centralizar">
                    <img src=<?= '../../../' . ($post->image ?? 'public/images/posts/comprovante.png') ?> alt="capa do livro">
                    <div class="todosAlinhamentos">
                        <div class="alinhamento">
                            <h3 class="titulosesquerda"> Autor </h3>
                            <p class="textinhoesquerda"> <?php echo $post[0]->author_post ?? ''; ?> </p>
                        </div>
                        <div class="alinhamento">
                            <h3 class="titulosesquerda"> Gênero </h3>
                            <div class="classificacao">

                                <?php foreach (explode(',', $post[0]->gender) ?? [] as $gender) : ?>
                                    <p class="elementos"> <?php echo $gender; ?> </p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="alinhamento">
                            <h3 class="titulosesquerda"> Avaliação </h3>
                            <p class="textinhoesquerda" id="estrelas">
                                <?php if ($post[0]->rating == 0) : ?>
                                    &star;&star;&star;&star;&star;
                                <?php elseif ($post[0]->rating == 1) : ?>
                                    &starf;&star;&star;&star;&star;
                                <?php elseif ($post[0]->rating == 2) : ?>
                                    &starf;&starf;&star;&star;&star;
                                <?php elseif ($post[0]->rating == 3) : ?>
                                    &starf;&starf;&starf;&star;&star;
                                <?php elseif ($post[0]->rating == 4) : ?>
                                    &starf;&starf;&starf;&starf;&star;
                                <?php elseif ($post[0]->rating == 5) : ?>
                                    &starf;&starf;&starf;&starf;&starf;
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="direita">
                <div class="textodireita">
                    <h1 class="titulo"><?= $post[0]->title ?? '' ?></h1>
                    <hr />
                    <h2 class="h2">Sinopse</h2>
                    <p class="texto"><?= $post[0]->synopsis ?? '' ?></p>
                    <h2 class="h2">Resenha</h2>
                    <p class="texto"><?= $post[0]->review ?? '' ?></p>
                </div>
                <div class="comentarios">
                    <h2 id="titulocomentarios"> Comentários </h2>

                    <form action="comment/criarComentario" method="POST">
                        <input type="text" name="post_id" value="<?= $_GET['id']?>" hidden>
                        <div class="espacocomentarios">
                            <input type="text" class="text" placeholder="Nome de Usuário" name="username"/>
                        </div>
                        <div class="espacocomentarios">
                            <input type="text" class="text" placeholder="Comente aqui" name="comment_text"/>
                        </div>
                        <button type="submit"> Enviar </button>
                    </form>
                    
                    <div class="outroscomentarios">
                        <?php foreach($comments as $key => $comment) : ?>
                            <p><strong>@<?= $comment->username ?? '' ?></strong><br><?= $comment->comment_text ?? '' ?> </p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--import do footer-->
    <?php require('./app/views/layouts/footer.php'); ?>

</body>

</html>