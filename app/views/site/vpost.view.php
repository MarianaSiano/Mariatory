<!DOCTYPE html>
<html lang="en">

<head>
    <title>Resenha - Nome Livro</title>

    <link rel="stylesheet" href="../../../public/css/vpost.css">

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
    <div class="tudo">
        <div class="conteudo">
            <div class="esquerda">
                <div class="centralizar">
                    <img src=<?= '../../../' . ($post->image ?? 'public/images/posts/comprovante.png') ?> alt="capa do livro">
                    <div class="todosAlinhamentos">
                        <div class="alinhamento">
                            <h3 class="titulosesquerda"> Autor </h3>
                            <p class="textinhoesquerda"> <?= $post->author->name ?? '' ?> </p>
                        </div>
                        <div class="alinhamento">
                            <h3 class="titulosesquerda"> Gênero </h3>
                            <div class="classificacao">
                                <?php foreach ($post->gender ?? [] as $gender) : ?>
                                    <p class="elementos"> <?= $gender ?> </p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="alinhamento">
                            <h3 class="titulosesquerda"> Avaliação </h3>
                            <p class="textinhoesquerda" id="estrelas"><?= $post->rating ?? '' ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="direita">
                <div class="textodireita">
                    <h1 class="titulo"><?= $post->title ?? '' ?></h1>
                    <hr />
                    <h2 class="h2">Sinopse</h2>
                    <p class="texto"><?= $post->synopsis ?? '' ?></p>
                    <h2 class="h2">Resenha</h2>
                    <p class="texto"><?= $post->review ?? '' ?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>