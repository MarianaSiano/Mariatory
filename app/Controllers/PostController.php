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
        $posts = App::get('database')->selectAll('posts');
        return view('admin/listaPostAdm', compact('posts'));
    }

    public function create()
    {
        $generos = $_POST['genero'];
        $stringGeneros = "";
        foreach($generos as $item) {
            $stringGeneros .= $item.",";
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
        $post->author = $this->recuperaDadosDoAutor($post->user_id);
        return view('site/vpost', compact('post'));
    }

    public function excluir()
    {
        $idPost = $_GET['post_id'];
        $post = App::get('database')->destroy('posts', 'id', $idPost);
        header('Location: /listaPostAdm');
    }

    public function editar()
    {
        $generos = $_POST['genero'];
        $stringGeneros = "";
        foreach($generos as $item) {
            $stringGeneros .= $item.",";
        }
        $valoresParaPost = $_POST;
        $valoresParaPost['genero'] = $stringGeneros;
        $imagePath = self::UPLOAD_PATH . basename($_FILES['imagem']['name']);
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $imagePath)) {
            $valoresParaPost['imagem'] = $imagePath;
            App::get('database')->editPost($valoresParaPost);
            header('Location: /listaPostAdm');
        }
    }

    public function recuperaDadosDoAutor(int $idDoUsuario)
    {
       return $user = App::get('database')->search('users', 'id', $idDoUsuario);
    }
}