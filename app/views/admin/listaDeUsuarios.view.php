<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maristory</title>

    <link rel="stylesheet" href="../../../public/css/listaDeUsuarios.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unicons.iconscout.com/release/v4.0.0/css/thinline.css' rel='stylesheet'>



</head>

<body>

    <div class="hide" id="modalzin">
    </div>

    <div class="modalllll hide muser" id="modalAddUser">
        <div class="headerModal">
            <h2 class="tituloModais">Criar novo Usuário!</h2>

            <div class="x"><i class="bx bx-x fechar"></i></div>
        </div>
        <hr />
        <form action="users/criarUsuario" method="POST">
            <div class="tudo">
                <div class="campoIMG">
                    <p>Imagem de perfil:</p>
                    <label for="dropzone-file" class="imagem">
                        <div class="img1">
                            <svg aria-hidden="true" class="img2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
                <div class="campoPreencher">
                    <div class="campos">
                        <p id="nomeUsuario">Nome do usuário:</p>
                        <input class="Nome" name="name" placeholder="Nome do usuário" required />
                        <p id="nomeUsuario">E-mail:</p>
                        <input class="email" name="email" placeholder="E-mail" required />
                        <p id="nomeUsuario">Senha:</p>
                        <input class="senha" name="password" placeholder="Senha" required type="password" />
                    </div>
                </div>

            </div>

            <div class="btnEditar">
                <button class="botaoSim fechar">Salvar</button>
                <button class="botaoSim fechar">Calcelar</button>
            </div>
        </form>
    </div>




    <!-- <div class="modalllll hide meditar" id="modalEditar">
        <div class="headerModal">
            <h2 class="tituloModais">Editar Usuário</h2>

            <div class="x"><i class="bx bx-x fechar"></i></div>
        </div>
        <hr />

        <div class="tudo">

            <div class="campoIMG">
                <p>Imagem de perfil:</p>
                <label for="dropzone-file" class="imagem">
                    <div class="img1">
                        <svg aria-hidden="true" class="img2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                            </path>
                        </svg>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>
            <div class="campoPreencher">
                <div class="campos">
                    <p id="nomeUsuario">Nome do usuário:</p>
                    <input class="Nome" placeholder="Nome do usuário" required />
                    <p id="nomeUsuario">E-mail:</p>
                    <input class="email" placeholder="E-mail" required />
                    <p id="nomeUsuario">Senha:</p>
                    <input class="senha" placeholder="Senha" required type="password" />
                </div>
            </div>

        </div>
        <div class="btnEditar">
            <button class="botaoSim fechar">Salvar</button>
            <button class="botaoSim fechar">Calcelar</button>
        </div>
    </div> -->


    <!-- <div class="modalllll hide" id="modalExcluir">
        <div class="headerModal">
            <h2 class="tituloModais">EXCLUIR USUÁRIO</h2>

            <div class="x"><i class="bx bx-x fechar"></i></div>
        </div>
        <hr />

        <p class="textoExcluir">
            Tem certeza que deseja excluir este artigo?
        </p>
        <div class="botoesExcluir">
            <button class="botaoSim fechar" id="colocar id de fechar o modal">
                sim
            </button>
            <button class="botaoNao fechar" id="id de fechar o modal">
                não
            </button>
        </div>
    </div> -->

    <div class="logotopo">
        <img class="mari" src="../../../public/assets/logoMaristori.png" alt="logo">
    </div>

    <div class="titulo">
        <h1>Lista de Usuários</h1>
    </div>

    <div class="heading">
        <form class="formulario">
            <div class="btnProcurar">
                <input type="search" class="procurar" placeholder="Procurar usuário" required />
            </div>

            <div class="btnBusca">
                <button type="submit" class="busca"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);">
                        <path d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                        </path>
                    </svg>
                </button>
            </div>

            <div class="btnUsuario">
                <button class="usuario clique" type="button" data-modal="modalAddUser"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 253, 253);">
                        <path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z">
                        </path>
                    </svg>

                </button>
            </div>
        </form>
    </div>

    <table class="tabela1">
        <tr>
            <th class="c1">ID</th>
            <th class="c2">NOME</th>
            <th class="c2">E-MAIL</th>
            <th class="c2">AÇÕES</th>
        </tr>

        <tr>
            <!--For each para varrer cada usuário do banco e mostrar seus dados-->
            <?php foreach($users as $key => $user): ?>
                <td class="l1c1"><?= $key + 1 ?></td>
                <td class="l1c2"><?= $user->name ?></td>
                <td class="l1c2"><?= $user->email ?></td>
                <td class="l1c3">

                    <!--Colocar nesse form o método para dar delete no usuário-->

                    <button class="btn1 clique" data-modal="modalVizualizar-<?= $user->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;">
                            <path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z">
                            </path>
                            <path d="M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z"></path>
                        </svg></button>

                    <div class="modalllll hide mvizualizar" id="modalVizualizar-<?= $user->id ?>">

                        <div class="headerModal">
                            <h2 class="tituloModais">Vizualizar Usuário</h2>

                            <div class="x"><i class="bx bx-x fechar"></i></div>
                        </div>
                        <hr />

                        <div class="tudo">

                            <div class="campoIMG">
                                <p>Imagem de perfil:</p>
                                <label for="dropzone-file" class="imagem">
                                    <div class="img1">
                                        <svg aria-hidden="true" class="img2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                    </div>
                                    <input id="dropzone-file" type="file" class="hidden" />
                                </label>
                            </div>
                            <div class="campoPreencher">
                                <div class="campos">
                                    <p id="nomeUsuario">Nome do usuário:</p>
                                    <input readonly class="Nome" disabled value="<?= $user->name ?>" />
                                    <p id="nomeUsuario">E-mail:</p>
                                    <input readonly class="email" disabled value="<?= $user->email ?>" />
                                    <p id="nomeUsuario">Senha:</p>
                                    <input readonly class="senha" disabled value="<?= $user->password ?>" type="password" />

                                </div>
                            </div>

                        </div>

                        <div class="btnEditar">
                            <button class="botaoSim fechar">Sair</button>
                        </div>

                    </div>

                    <button class="btn2 clique" data-modal="modalEditar-<?= $user->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;">
                            <path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                            </path>
                            <path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                            </path>
                        </svg></button>


                    <form action="users/editarUsuario" method="post">
                        <input hidden value="<?= $user->id ?>" name="id">
                        <div class="modalllll hide meditar" id="modalEditar-<?= $user->id ?>">
                            <div class="headerModal">
                                <h2 class="tituloModais">Editar Usuário</h2>
                                <div class="x"><i class="bx bx-x fechar"></i></div>
                            </div>
                            <hr />
                            <div class="tudo">
                                <div class="campoIMG">
                                    <p>Imagem de perfil:</p>
                                    <label for="dropzone-file" class="imagem">
                                        <div class="img1">
                                            <svg aria-hidden="true" class="img2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                                <div class="campoPreencher">
                                    <div class="campos">
                                        <p id="nomeUsuario">Nome do usuário:</p>
                                        <input class="Nome" name="name" value="<?= $user->name ?>" />
                                        <p id="nomeUsuario">E-mail:</p>
                                        <input class="email" name="email" value="<?= $user->email ?>" />
                                        <p id="nomeUsuario">Senha:</p>
                                        <input class="senha" name="password" value="<?= $user->password ?>" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="btnEditar">
                                <button type="submit" class="botaoSim fechar">Salvar</button>
                                <button class="botaoSim fechar">Calcelar</button>
                            </div>
                        </div>
                    </form>

                    <button class="btn3 clique" data-modal="modalExcluir-<?= $user->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;">
                            <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.207 12.793-1.414 1.414L12 13.414l-2.793 2.793-1.414-1.414L10.586 12 7.793 9.207l1.414-1.414L12 10.586l2.793-2.793 1.414 1.414L13.414 12l2.793 2.793z">
                            </path>
                        </svg></button>

                    <form action="users/deletarUsuario" method="POST">
                        <input hidden value="<?= $user->id ?>" name="id">
                        <div class="modalllll hide" id="modalExcluir-<?= $user->id ?>">
                            <div class="headerModal">
                                <h2 class="tituloModais">EXCLUIR USUÁRIO</h2>
                                <div class="x"><i class="bx bx-x fechar"></i></div>
                            </div>
                            <hr />
                            <p class="textoExcluir">
                                Tem certeza que deseja excluir este usuário <?= $user->id ?> ?
                            </p>
                            <div class="botoesExcluir">
                                <button class="botaoSim fechar" type="submit">
                                    sim
                                </button>
                                <button class="botaoNao fechar">
                                    não
                                </button>
                            </div>
                        </div>
                    </form>


                </td>
        </tr>
    <?php endforeach; ?>
    </table>

    <script>
        //Fade do javascript
        const fade = document.getElementById('modalzin');
        const btns = document.getElementsByClassName('clique');
        const fechar = document.getElementsByClassName("fechar")

        const abrir = [...btns].filter((elemento) => {
            return elemento.dataset.modal != null;
        })

        function modaAberto() {
            const modalllll = document.getElementsByClassName('modalllll');

            const close = [...modalllll].filter((elemento) => {
                return !elemento.classList.contains("hide");
            })

            return close[0]
        }

        function abrirModal(id) {
            if (id == undefined) {
                const modaFecha = modaAberto()
                modaFecha.classList.toggle('hide');
                fade.classList.toggle('hide');
            } else {
                const modalabrir = document.getElementById(id);
                console.log(fade);
                fade.classList.toggle('hide');
                modalabrir.classList.toggle('hide');
            }
        }

        function fecharModal() {
            fade.classList.remove('actived');
        }

        [...abrir, ...fechar, fade].forEach((elemento) => {
            console.log("qlqrcoisa")
            elemento.addEventListener("click", () => abrirModal(elemento.dataset.modal))

        })

        window.addEventListener('click', (event) => {
            if (event.target == fade) {
                fade.classList.remove('actived');
            }
        })

        window.onload = function() {
            <?php if(isset($_SESSION['email_error'])): ?>
                alert(<?php echo json_encode($_SESSION['email_error']) ?>);
                <?php unset($_SESSION['email_error']) ?>
            <?php endif ?>
        };
       
    </script>

</body>

</html>