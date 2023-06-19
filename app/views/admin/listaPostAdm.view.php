<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css"
    />
    <link rel="stylesheet" href="../../../public/css/listaPostAdm.css" />
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="icon" type="image/png" href="/public/assets/Maristory-Navbar.png" sizes="32x32">

    <title>Gerenciar Posts</title>
  </head>
  <body class="bg-nuvens bg-repeat">
  <?php require('./app/views/layouts/sidebar.php'); ?>
    <div class="main">
      <dialog
        id="myModal"
        class="rounded-lg border border-solid border-roxo-escuro-2 bg-white p-5 backdrop:bg-roxo-escuro-2/20"
      >
        <div class="flex items-center justify-between">
          <h2 class="mb-3 mt-0 text-center font-semibold">EXCLUIR POSTAGEM</h2>
          <div id="fecharExcluir"><i class="bx bx-x"></i></div>
        </div>
        <hr />
        <p class="mt-4 text-center">
          Tem certeza que deseja excluir este artigo?
        </p>
        <div class="text-center">
          <button
            class="mt-4 rounded-lg bg-roxo-medio-2 px-2 py-1 text-white drop-shadow-lg"
            id="sBtn"
          >
            sim
          </button>
          <button
            class="rounded-lg bg-roxo-claro-1 px-2 py-1 drop-shadow-lg"
            id="cBtn"
          >
            não
          </button>
        </div>
      </dialog>
      <dialog id="modalCriacao" class="rounded-lg backdrop:bg-roxo-escuro-2/20">
        <div class="flex items-center justify-between">
          <h2 class="mt-4 text-center font-semibold">CRIAR POSTAGEM</h2>
          <i class="bx bx-x" id="fecharCriacao"></i>
        </div>
        <hr class="my-4" />
        <form enctype="multipart/form-data" action="post/criarPost" method="post">
          <div class="grid grid-cols-3 gap-5">
            <div class="flex flex-col">
              <p class="font-semibold">Imagem</p>
              <div class="flex h-full w-full items-center justify-center">
                <label
                  for="dropzone-file"
                  class="dark:hover:bg-bray-800 flex h-full w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-roxo-medio-1 bg-roxo-claro-1 hover:bg-roxo-claro-2"
                >
                  <div class="items-center justify-center">
                    <svg
                      aria-hidden="true"
                      class="h-10 w-10 text-roxo-escuro-2"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"
                      ></path>
                    </svg>
                  </div>
                  <input name="imagem_post" id="dropzone-file" type="file" class="hidden" />
                </label>
              </div>
            </div>
            <div class="flex flex-col">
              <p class="font-semibold">Título:</p>
              <input
                name="titulo"
                class="rounded-lg border-transparent bg-roxo-claro-1 p-2 text-black placeholder-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
                type="text"
                for="titulo"
                placeholder="Título..."
              />
              <p class="font-semibold">Gênero:</p>
      
                <div
                  class="multiselect rounded-lg border-transparent bg-roxo-claro-1 p-2 text-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
                >
                  <div class="selectBox">
                    <label>Selecione os gêneros</label>
                    <div>
                      <label class="inline-flex items-center">
                        <input
                          value="Romance"
                          name="genero[]"
                          type="checkbox"
                          class="form-checkbox text-indigo-600"
                        />
                        <span class="ml-2">Romance</span>
                      </label>
                    </div>
                    <div>
                      <label class="inline-flex items-center">
                        <input
                          value="Ficção"
                          name="genero[]"
                          type="checkbox"
                          class="form-checkbox text-indigo-600"
                        />
                        <span class="ml-2">Ficção</span>
                      </label>
                    </div>
                    <div>
                      <label class="inline-flex items-center">
                        <input
                          value="Psicológico"
                          name="genero[]"
                          type="checkbox"
                          class="form-checkbox text-indigo-600"
                        />
                        <span class="ml-2">Psicológico</span>
                      </label>
                    </div>
                    <div>
                      <label class="inline-flex items-center">
                        <input
                          value="Autoajuda"
                          name="genero[]"
                          type="checkbox"
                          class="form-checkbox text-indigo-600"
                        />
                        <span class="ml-2">Autoajuda</span>
                      </label>
                    </div>
                    <div>
                      <label class="inline-flex items-center">
                        <input
                          value="Terror"
                          name="genero[]"
                          type="checkbox"
                          class="form-checkbox text-indigo-600"
                        />
                        <span class="ml-2">Terror</span>
                      </label>
                    </div>
                    <div>
                      <label class="inline-flex items-center">
                        <input
                          value="Guia"
                          name="genero[]"
                          type="checkbox"
                          class="form-checkbox text-indigo-600"
                        />
                        <span class="ml-2">Guia</span>
                      </label>
                    </div>
                    <div>
                      <label class="inline-flex items-center">
                        <input
                          value="Infantil"
                          name="genero[]"
                          type="checkbox"
                          class="form-checkbox text-indigo-600"
                        />
                        <span class="ml-2">Infantil</span>
                      </label>
                    </div>
                    <!-- <select name="genero[]" class="bg-roxo-claro-1" multiple>
                      <option value="Romance">Romance</option>
                      <option value="Ficção">Ficção</option>
                      <option value="Psicológico">Psicológico</option>
                      <option value="Autoajuda">Autoajuda</option>
                      <option value="Terror">Terror</option>
                      <option value="Guia">Guia</option>
                      <option value="Infantil">Infantil</option>
                    </select> -->
                  </div>
                </div>
      
              <p style="display:none;" class="font-semibold">Data de Criação:</p>
              <div style="display: none;" class="rounded-lg bg-roxo-claro-1 p-2 text-roxo-escuro-2">
                <p>15/05/23</p>
              </div>
            </div>
            <div class="flex flex-col">
              <p>Autor</p>
              <input
                name="autor"
                class="rounded-lg border-transparent bg-roxo-claro-1 p-2 text-black placeholder-roxo-escuro-2 focus:outline-0"
                type="text"
                for="autor"
                placeholder="Autor..."
              /><div style="display:none;" class="esconder">
      
                <p class="font-semibold">Redflag:</p>
      
                  <div
                    class="multiselect rounded-lg border-transparent bg-roxo-claro-1 p-2 text-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
                  >
                    <div class="selectBox" onclick="showCheckboxesRedflag()">
                      <option>Selecione as Redflags</option>
                      <select class="bg-roxo-claro-1"></select>
                      <div class="overSelect"></div>
                    </div>
                    <div class="flex flex-col" id="checkboxesRedflag">
                      <div>
                        <label class="inline-flex items-center">
                          <input
                            name="redflag"
                            type="checkbox"
                            class="form-checkbox text-indigo-600"
                          />
                          <span class="ml-2">Disturbio Alimentar</span>
                        </label>
                      </div>
                      <div>
                        <label class="inline-flex items-center">
                          <input
                            name="redflag"
                            type="checkbox"
                            class="form-checkbox text-indigo-600"
                          />
                          <span class="ml-2">Violência</span>
                        </label>
                      </div>
                      <div>
                        <label class="inline-flex items-center">
                          <input
                            name="redflag"
                            type="checkbox"
                            class="form-checkbox text-indigo-600"
                          />
                          <span class="ml-2">Abuso de substâncias Psicoativas</span>
                        </label>
                      </div>
                      <div>
                        <label class="inline-flex items-center">
                          <input
                            name="redflag"
                            type="checkbox"
                            class="form-checkbox text-indigo-600"
                          />
                          <span class="ml-2">Doença psiquiátrica</span>
                        </label>
                      </div>
                      <div>
                        <label class="inline-flex items-center">
                          <input
                            name="redflag"
                            type="checkbox"
                            class="form-checkbox text-indigo-600"
                          />
                          <span class="ml-2">Violência Sexual</span>
                        </label>
                      </div>
                    </div>
                  </div>
      
              </div>
              <p class="font-semibold">Avaliação:</p>
              <div class="rounded-lg bg-roxo-claro-1 p-2">
                <select
                  name="avaliacao"
                  id="countries"
                  class="p-1.8 block w-full border-none bg-roxo-claro-1 text-sm text-black focus:border-roxo-claro-2 focus:shadow-none focus:outline-0"
                >
                  <option selected>&star;&star;&star;&star;&star; (0/5)</option>
                  <option value="1">&starf;&star;&star;&star;&star; (1/5)</option>
                  <option value="2">
                    &starf;&starf;&star;&star;&star; (2/5)
                  </option>
                  <option value="3">
                    &starf;&starf;&starf;&star;&star; (3/5)
                  </option>
                  <option value="4">
                    &starf;&starf;&starf;&starf;&star; (4/5)
                  </option>
                  <option value="5">
                    &starf;&starf;&starf;&starf;&starf; (5/5)
                  </option>
                </select>
              </div>
            </div>
          </div>
          <p class="font-semibold">Sinopse</p>
          <textarea
            name="sinopse"
            rows="4"
            class="block w-full rounded-lg border border-none bg-roxo-claro-1 p-2.5 text-sm placeholder-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
            placeholder="Escreva a sinopse aqui"
          ></textarea>
          <p class="font-semibold">Resenha</p>
          <textarea
            name="resenha"
            rows="4"
            class="block w-full rounded-lg border border-none bg-roxo-claro-1 p-2.5 text-sm placeholder-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
            placeholder="Escreva a resenha aqui"
          ></textarea>
          <div class="mt-4 flex justify-end gap-4">
            <button
              class="min-w-fit rounded-lg bg-roxo-medio-1 px-2 py-3 text-white drop-shadow-lg hover:bg-roxo-medio-2"
              id="fecharCriar1"
            >
              Cancelar
            </button>
            <button
              class="min-w-fit rounded-lg bg-roxo-medio-1 px-2 py-3 text-white drop-shadow-lg hover:bg-roxo-medio-2"
              id="fecharCriar2" type="submit"
            >
              Postar
            </button>
          </div>
        </form>
      </dialog>
      <dialog id="modalEdicao" class="rounded-lg backdrop:bg-roxo-escuro-2/20">
        <div class="flex items-center justify-between">
          <h2 class="mt-4 text-center font-semibold">EDITAR POSTAGEM</h2>
          <i class="bx bx-x" id="fecharEditar1"></i>
        </div>
        <hr class="my-4" />
      
            <form id="formEdit" action="" method="POST" enctype="multipart/form-data">
              <input type="hidden" value="" id="id_post" name='post_id'>
              <div class="grid grid-cols-3 gap-5">
                <div class="flex flex-col">
                  <p class="font-semibold">Imagem</p>
                  <div class="flex h-full w-full items-center justify-center">
                    <label
                      for="dropzone-file1"
                      class="dark:hover:bg-bray-800 flex h-full w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-roxo-medio-1 bg-roxo-claro-1 hover:bg-roxo-claro-2"
                    >
                      <div class="items-center justify-center">
                        <svg
                          aria-hidden="true"
                          class="h-10 w-10 text-roxo-escuro-2"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"
                          ></path>
                        </svg>
                      </div>
                    </label>
                    <input name="image" id="dropzone-file1" type="file" class="hidden" />
                  </div>
                </div>
                <div class="flex flex-col">
                  <p class="font-semibold">Título:</p>
                  <input
                    class="rounded-lg border-transparent bg-roxo-claro-1 p-2 text-black placeholder-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
                    type="text"
                    for="titulo"
                    placeholder="Título..."
                    name='title'
                  />
        
                  <p class="font-semibold">Gênero:</p>
        
                    <div
                      class="multiselect rounded-lg border-transparent bg-roxo-claro-1 p-2 text-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
                    >
                      <div class="selectBox" onclick="showCheckboxesGenero()">
                        <option>Selecione os gêneros</option>
                        <select class="bg-roxo-claro-1"></select>
                        <div class="overSelect"></div>
                      </div>
                      <div class="flex flex-col" id="checkboxesGenero">
                    
                        <div>
                          <label class="inline-flex items-center">
                            <input
                          value="Romance"
                          name="gender[]"
                              type="checkbox"
                              class="form-checkbox text-indigo-600"
                            />
                            <span class="ml-2">Romance</span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input
                          value="Ficção"
                          name="gender[]"
                              type="checkbox"
                              class="form-checkbox text-indigo-600"
                            />
                            <span class="ml-2">Ficção</span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input
                          value="Psicológico"
                          name="gender[]"
                              type="checkbox"
                              class="form-checkbox text-indigo-600"
                            />
                            <span class="ml-2">Psicológico</span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input
                          value="Autoajuda"
                          name="gender[]"
                              type="checkbox"
                              class="form-checkbox text-indigo-600"
                            />
                            <span class="ml-2">Autoajuda</span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input
                          value="Terror"
                          name="gender[]"
                              type="checkbox"
                              class="form-checkbox text-indigo-600"
                            />
                            <span class="ml-2">Terror</span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input
                          value="Guia"
                          name="gender[]"
                              type="checkbox"
                              class="form-checkbox text-indigo-600"
                            />
                            <span class="ml-2">Guia</span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input
                          value="Infantil"
                          name="gender[]"
                              type="checkbox"
                              class="form-checkbox text-indigo-600"
                            />
                            <span class="ml-2">Infantil</span>
                          </label>
                        </div>
                      </div>
                    </div>
        
                  <p style="display: none;" class="font-semibold">Data de Criação:</p>
                  <div style="display: none;" class="rounded-lg bg-roxo-claro-1 p-2 text-roxo-escuro-2">
                    <p>15/05/23</p>
                  </div>
                </div>
                <div class="flex flex-col">
                  <p>Autor</p>
                  <input
                    class="rounded-lg border-transparent bg-roxo-claro-1 p-2 text-black placeholder-roxo-escuro-2 focus:outline-0"
                    type="text"
                    for="autor"
                    placeholder="Autor..."
                  />
                  <div style="display:none;" class="esconder">
                <p class="font-semibold">Redflag:</p>
      
                  <div
                    class="multiselect rounded-lg border-transparent bg-roxo-claro-1 p-2 text-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
                  >
                    <div class="selectBox" onclick="showCheckboxesRedflag()">
                      <option>Selecione as Redflags</option>
                      <select class="bg-roxo-claro-1"></select>
                      <div class="overSelect"></div>
                    </div>
                    <div class="flex flex-col" id="checkboxesRedflag">
                      <div>
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="form-checkbox text-indigo-600"
                          />
                          <span class="ml-2">Disturbio Alimentar</span>
                        </label>
                      </div>
                      <div>
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="form-checkbox text-indigo-600"
                          />
                          <span class="ml-2">Violência</span>
                        </label>
                      </div>
                      <div>
                        <label class="inline-flex items-center">
                          <input
                            type="checkbox"
                            class="form-checkbox text-indigo-600"
                          />
                          <span class="ml-2">Abuso de substâncias Psicoativas</span>
                        </label>
                      </div>
              </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input
                              type="checkbox"
                              class="form-checkbox text-indigo-600"
                            />
                            <span class="ml-2">Doença psiquiátrica</span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input
                              type="checkbox"
                              class="form-checkbox text-indigo-600"
                            />
                            <span class="ml-2">Violência Sexual</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  <p class="font-semibold">Avaliação:</p>
                  <div class="rounded-lg bg-roxo-claro-1 p-2">
                    <select
                      id="countries"
                      class="p-1.8 block w-full border-none bg-roxo-claro-1 text-sm text-black focus:border-roxo-claro-2 focus:shadow-none focus:outline-0"
                      name='rating'
                    >
                      <option selected>&star;&star;&star;&star;&star; (0/5)</option>
                      <option value="1">&starf;&star;&star;&star;&star; (1/5)</option>
                      <option value="2">
                        &starf;&starf;&star;&star;&star; (2/5)
                      </option>
                      <option value="3">
                        &starf;&starf;&starf;&star;&star; (3/5)
                      </option>
                      <option value="4">
                        &starf;&starf;&starf;&starf;&star; (4/5)
                      </option>
                      <option value="5">
                        &starf;&starf;&starf;&starf;&starf; (5/5)
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <p class="font-semibold">Sinopse</p>
              <textarea
                rows="4"
                class="cor block w-full rounded-lg border border-none bg-roxo-claro-1 p-2.5 text-sm text-black placeholder-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
                placeholder="Escreva a sinopse aqui"
                name='synopsis'
              ></textarea>
              <p class="font-semibold">Resenha</p>
              <textarea
                rows="4"
                class="block w-full rounded-lg border border-none bg-roxo-claro-1 p-2.5 text-sm placeholder-roxo-escuro-2 focus:border-none focus:shadow-none focus:outline-none"
                placeholder="Escreva a resenha aqui"
                name='review'
              ></textarea>
              <div class="mt-4 flex justify-end gap-4">
                <button
                  id="fecharEditar2"
                  class="min-w-fit rounded-lg bg-roxo-medio-1 px-2 py-3 text-white drop-shadow-lg hover:bg-roxo-medio-2"
                >
                  Cancelar
                </button>
                <button
                  type = 'submit'
                  id="fecharEditar3"
                  class="min-w-fit rounded-lg bg-roxo-medio-1 px-2 py-3 text-white drop-shadow-lg hover:bg-roxo-medio-2"
                >
                  Editar
                </button>
              </div>
            </form>
      </dialog>
      <dialog
        id="modalVisualizacao"
        class="rounded-lg p-0 backdrop:bg-roxo-escuro-2/20"
      >
        <iframe id="visualizar_post" class="h-[80vh] w-[80vw]" ></iframe>
        <button
          class="m-2 flex min-w-fit flex-row justify-end rounded-lg bg-roxo-medio-1 px-2 py-3 text-white drop-shadow-lg hover:bg-roxo-medio-2"
          id="fecharVisualizacao"
        >
          Fechar
        </button>
      </dialog>
      <div id="vizualisar" class=""></div>
      <img
        class="mx-auto my-5 h-[17%] w-[17%] object-scale-down"
        src="../../../public/assets/logoMaristori.png"
        alt="logo Maristory"
      />
      <h1 class="mb-10 text-center text-5xl font-semibold text-roxo-medio-2">
        Lista de Posts
      </h1>
      <div
        class="mx-[12.5%] flex flex-row gap-5 smartphone:flex-col smartphone:gap-2"
      >
        <form class="flex basis-full gap-2">
          <input
            type="search"
            class="focus:ring-none w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-6 text-sm text-gray-900 drop-shadow-lg focus:border-none"
            placeholder="Procurar post"
            required
          />
          <button
            type="submit"
            class="rounded-lg bg-roxo-medio-1 px-4 py-2 text-sm font-medium text-white drop-shadow-lg hover:bg-roxo-medio-2 focus:outline-none"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              style="fill: rgb(255, 255, 255)"
            >
              <path
                d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"
              ></path>
            </svg>
          </button>
        </form>
        <button
          class="min-w-fit rounded-lg bg-roxo-medio-1 px-2 py-3 text-white drop-shadow-lg hover:bg-roxo-medio-2"
          id="botaoCriar"
          type="button"
        >
          Criar Postagem
        </button>
      </div>
      <table
        class="mx-auto mt-3 w-3/4 border-separate border-spacing-0 rounded-xl border border-gray-900 bg-roxo-claro-1 text-center shadow-xl shadow-roxo-medio-2"
      >
        <tr>
          <th class="p-2">TÍTULO DO POST</th>
          <th class="border-x border-gray-900 p-2">DATA</th>
          <th class="p-2">AÇÕES</th>
        </tr>
        <?php foreach($posts as $key => $post): ?>
          <tr>
            <td class="border-y border-gray-900 p-2">
             <?= $post->title; ?>
            </td>
            <td style="border: 1px solid black !important;" class="border border-gray-900 p-2"> <?= date('d/m/y', strtotime($post->created_at)) ?> </td>
            <td class="border-y border-gray-900 p-2">
              <button
                class="botao_visualizar bottom-1 rounded-lg bg-roxo-medio-1 px-2 py-1 text-sm font-medium text-white hover:bg-roxo-medio-2 focus:outline-none"
                <?php if($key === 0) {echo "id=botaoVisualizar1"; } ?>
                id-post = <?= $post->id ?>
                id-element = <?= $key ?>
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  style="fill: rgb(255, 255, 255)"
                >
                  <path
                    d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z"
                  ></path>
                  <path
                    d="M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z"
                  ></path>
                </svg>
              </button>
              <button
                class="botoesEditar bottom-1 rounded-lg bg-roxo-medio-1 px-2 py-1 text-sm font-medium text-white hover:bg-roxo-medio-2 focus:outline-none smartphone:mb-2 tablet:mb-2"
                <?php if($key === 0) { echo "id='botaoEditar1'";} ?>  
                    id-post="<?= $post->id ?>"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  style="fill: rgb(255, 255, 255)"
                >
                  <path
                    d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"
                  ></path>
                  <path
                    d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"
                  ></path>
                </svg>
              </button>
              <button
                class="excluirPost bottom-1 rounded-lg bg-roxo-medio-1 px-2 py-1 text-sm font-medium text-white hover:bg-roxo-medio-2 focus:outline-none smartphone:mb-2"
                <?php if($key === 0) { echo "id='myBtn'";} ?> id-post=<?= $post->id ?>
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  style="fill: rgb(255, 255, 255)"
                >
                  <path
                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.207 12.793-1.414 1.414L12 13.414l-2.793 2.793-1.414-1.414L10.586 12 7.793 9.207l1.414-1.414L12 10.586l2.793-2.793 1.414 1.414L13.414 12l2.793 2.793z"
                  ></path>
                </svg>
              </button>
            </td>
          </tr>
        <?php endforeach ?> 
      
            <tr>
          <td class="p-2">Felicidade Clandestina</td>
          <td class="border-x border-gray-900 p-2">03/11/22</td>
          <td class="p-2">
            <button
              class="bottom-1 rounded-lg bg-roxo-medio-1 px-2 py-1 text-sm font-medium text-white hover:bg-roxo-medio-2 focus:outline-none"
              id="botaoVisualizar2"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                style="fill: rgb(255, 255, 255)"
              >
                <path
                  d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z"
                ></path>
                <path
                  d="M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z"
                ></path>
              </svg>
            </button>
            <button
              id="botaoEditar2"
              class="bottom-1 rounded-lg bg-roxo-medio-1 px-2 py-1 text-sm font-medium text-white hover:bg-roxo-medio-2 focus:outline-none smartphone:mb-2 tablet:mb-2"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                style="fill: rgb(255, 255, 255)"
              >
                <path
                  d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"
                ></path>
                <path
                  d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"
                ></path>
              </svg>
            </button>
            <button
              class="bottom-1 rounded-lg bg-roxo-medio-1 px-2 py-1 text-sm font-medium text-white hover:bg-roxo-medio-2 focus:border-none focus:shadow-none focus:outline-none smartphone:mb-2"
              id="moBtn"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                style="fill: rgb(255, 255, 255)"
              >
                <path
                  d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.207 12.793-1.414 1.414L12 13.414l-2.793 2.793-1.414-1.414L10.586 12 7.793 9.207l1.414-1.414L12 10.586l2.793-2.793 1.414 1.414L13.414 12l2.793 2.793z"
                ></path>
              </svg>
            </button>
          </td>
        </tr>
      </table>
    </div>

    <script src="../../../public/js/modalListaPostAdm.js"></script>

    <script>
      window.onload = function() {
        <?php if(isset($_SESSION['post_created'])): ?>
            alert(<?php echo json_encode($_SESSION['post_created']) ?>);
            <?php unset($_SESSION['post_created']) ?>
        <?php endif ?>
      };

      botaoOriginalClicado = true;
			botaoVisualizar = document.querySelector('[id-element="0"]');
      botoesVisualizar = document.getElementsByClassName("botao_visualizar");
			modalVisualizar = document.getElementById('visualizar_post');
			if(botoesVisualizar.length) {
        for(let i = 1; i < botoesVisualizar.length; i++) {
          const element = botoesVisualizar[i];
          element.addEventListener('click', function () {
            botaoOriginalClicado = false;
            modalVisualizar.src = '/teste?post_id=' + element.getAttribute('id-post');
            botaoVisualizar.click();
          });
        }
			}
			
      if(botaoVisualizar) {
				botaoVisualizar.addEventListener('click', function () {
          if(botaoOriginalClicado) {
            modalVisualizar.src = '/teste?post_id=' + botaoVisualizar.getAttribute('id-post');
          }
          botaoOriginalClicado = true;
			  });
      }

      botaoOriginalExcluirClicado = true;
      botoesExcluir = document.getElementsByClassName("excluirPost");
			botaoExcluir = document.getElementById('myBtn');
			modalExcluir = document.getElementById('sBtn');
      id_post = '';

      if(botoesExcluir.length) {
        for(let i = 1; i < botoesExcluir.length; i++) {
          const elementExcluir = botoesExcluir[i];
          elementExcluir.addEventListener('click', function () {
            botaoOriginalExcluirClicado = false;
            modalExcluir.src = '/post/excluir?post_id=' + elementExcluir.getAttribute('id-post');
            modalExcluir.addEventListener('click', function () {
              window.location.href = modalExcluir.src;
            });
            botaoExcluir.click();
          });
        }
			}

			if(botaoExcluir){
        botaoExcluir.addEventListener('click', function () {
          if(botaoOriginalExcluirClicado) {
            modalExcluir.src = '/post/excluir?post_id=' + botaoExcluir.getAttribute('id-post');
          } 
        });
        botaoOriginalExcluirClicado = true;
        modalExcluir.addEventListener('click', function () {
          window.location.href = modalExcluir.src;
        });
			}
			
      botaoOriginalEditarClicado = true;
      botoesEditar = document.getElementsByClassName("botoesEditar");
			botaoEditar = document.getElementById('botaoEditar1');
			//modalEditar = document.getElementById('fecharEditar3');
			modalEditar = document.getElementById('formEdit');

      if(botoesEditar.length) {
        for(let i = 1; i < botoesEditar.length; i++) {
          const elementEditar = botoesEditar[i];
          elementEditar.addEventListener('click', function () {
            botaoOriginalEditarClicado = false;
            document.getElementById('id_post').value = elementEditar.getAttribute('id-post');
            botaoEditar.click();
            botaoOriginalEditarClicado = true;
          });
        }
			}

			if(botaoEditar) {
				botaoEditar.addEventListener('click', function () {
					modalEditar.action = '/post/editar';
          if(botaoOriginalEditarClicado) {
            document.getElementById('id_post').value = botaoEditar.getAttribute('id-post');
          }
			  });
        botaoOriginalEditarClicado = true;
			}


    </script>
  </body>
</html>
