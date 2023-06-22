<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController {

    const UPLOAD_PATH = 'public/images/posts/';

    public function __construct()
    {
        if(!isset($_SESSION)) {
            session_start();
        }
    }
    
    public function view()
    {
        if(isset($_GET['valor_pesquisado'])) { 
            $posts = App::get('database')->searchPost($_GET['valor_pesquisado']);
            return view('admin/listaPostAdm', compact('posts'));
        }else{
            if(isset($_GET['pagina'])){
                $page = $_GET['pagina'] ?? 1;
    
                if(intval($_GET['pagina']) <= 0){
                    $page = 1;
                }
            }else{
                $_GET['pagina'] = 1;
                $page = 1;
            }

            $qtd_posts = 5;
            //Operador de colascência nula para caso o GET['pagina'] seja NULL. 

            $start = $page - 1;
            $start *= $qtd_posts;

            $posts = App::get('database')->selectAll('posts');

            $total_posts = count($posts);

            //Pegar o teto da divisão  
            $total_pages = ceil($total_posts/$qtd_posts);

            $posts = App::get('database')->pagination('posts', $start, $qtd_posts);

            // die(var_dump($posts_pagination));

            $identificador = 'listaPostAdm';

            // return view('admin/listaPostAdm', compact('posts'));
            return view('admin/listaPostAdm', compact('posts', 'total_pages', 'qtd_posts', 'total_posts', 'start', 'page', 'identificador'));
        }
    }

    public function create()
    {
        $generos = $_POST['genero'];
        $stringGeneros = "";
        foreach($generos as $index => $item) {
            if($index < count($generos)-1)
                $stringGeneros .= $item.",";
            else
                $stringGeneros .= $item;
        }
        $imagePath = self::UPLOAD_PATH . basename($_FILES['imagem_post']['name']);
        if(move_uploaded_file($_FILES['imagem_post']['tmp_name'], $imagePath)) {
            $dadosDoPost = [
                'titulo' => $_POST['titulo'],
                'autor' => $_POST['autor'],
                'sinopse' => $_POST['sinopse'],
                'resenha' => $_POST['resenha'],
                'avaliacao' => $_POST['avaliacao'],
                'gender' => $stringGeneros,
                'imagem' => $imagePath
            ];
            
            App::get('database')->createPost($dadosDoPost);
            $_SESSION['post_created'] = "Post criado com sucesso!";
            header('Location: /listaPostAdm');
        }
        
    }

    public function show()
    {
        $idPost = $_GET['post_id'];
        $post = App::get('database')->search('posts', 'id', $idPost);
        $numeroDeEstrelasPreenchidas = '';
        for($contadora = 1; $contadora <= 5; $contadora++) { 
            if($post->rating >= $contadora) { 
                $numeroDeEstrelasPreenchidas .= '&starf;';
            } else {
                 $numeroDeEstrelasPreenchidas .= '&star;'; 
            }
        }
        $post->gender = explode(",", $post->gender);
        array_pop($post->gender);
        $post->rating = $numeroDeEstrelasPreenchidas;
        $post->author = $this->recuperaDadosDoAutor($post->author_post);
        return view('site/vpost', compact('post'));
    }

    public function search()
    {
        $idPost = $_GET['post_id'];
        $post = App::get('database')->search('posts', 'id', $idPost);
        $numeroDeEstrelasPreenchidas = '';
        for($contadora = 1; $contadora <= 5; $contadora++) { 
            if($post->rating >= $contadora) { 
                $numeroDeEstrelasPreenchidas .= '&starf;';
            } else {
                 $numeroDeEstrelasPreenchidas .= '&star;'; 
            }
        }
        $post->gender = explode(",", $post->gender);
        array_pop($post->gender);
        $post->rating = $numeroDeEstrelasPreenchidas;
        $post->author = $this->recuperaDadosDoAutor($post->author_post);
        echo json_encode($post);
        //return view('site/vpost', compact('post'));
    }

    public function excluir()
    {
        $idPost = $_GET['post_id'];
        $post = App::get('database')->destroy('posts', 'id', $idPost);
        header('Location: /listaPostAdm');
    }

    public function editar()
    {
        $generos = $_POST['gender'] ?? [];
        $stringGeneros = "";
        foreach($generos as $item) {
            $stringGeneros .= $item.",";
        }
        $valoresParaPost = $_POST;
        if(isset($valoresParaPost['gender'])) {
            $valoresParaPost['gender'] = $stringGeneros;
        }
        if(isset($valoresParaPost['image'])) {
            $imagePath = self::UPLOAD_PATH . basename($_FILES['image']['name']);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                $valoresParaPost['image'] = $imagePath;
                App::get('database')->editPost($valoresParaPost);
                header('Location: /listaPostAdm');
                exit();
            }
        }
        App::get('database')->editPost($valoresParaPost);
        header('Location: /listaPostAdm');
    }

    public function recuperaDadosDoAutor(int $idDoUsuario)
    {
       return $user = App::get('database')->search('users', 'id', $idDoUsuario);
    }
}