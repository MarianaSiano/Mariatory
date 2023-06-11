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
        $imagePath = self::UPLOAD_PATH . basename($_FILES['imagem_post']['name']);
        if(move_uploaded_file($_FILES['imagem_post']['tmp_name'], $imagePath)) {
            $dadosDoPost = [
                'titulo' => $_POST['titulo'],
                'autor' => $_POST['autor'],
                'sinopse' => $_POST['sinopse'],
                'resenha' => $_POST['resenha'],
                'avaliacao' => $_POST['avaliacao'],
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
    
        return view('site/vpost', compact('post'));
    }
    

}