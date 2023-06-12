<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostListController{

    public function view(){
        return view('site/postList');
    }

    public function show()
    {
        $posts = App::get('database')->selectAll('posts');
        
        //Troco o id que está lá pelo nome do autor
        foreach($posts as $post){
            $post->author_post = App::get('database')->selectUserName($post->author_post);
        }
        
        $postsList = [
            'posts' => $posts
        ];

        return view('site/postList', $postsList);
    }

    public function search(){
        $valor_buscado = $_GET['search'];
        $posts = App::get('database')->searchPost($valor_buscado);

        $postsBuscados = [
            'posts' => $posts
        ];

        return view('site/postList', $postsBuscados);
    }
}