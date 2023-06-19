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
        if(isset($_GET['pagina'])){
            $page = $_GET['pagina'] ?? 1;

            if(intval($_GET['pagina']) <= 0){
                $page = 1;
            }
        }else{
            $page = 1;
        }
        

        $qtd_posts = 9;
        //Operador de colascência nula para caso o GET['pagina'] seja NULL. 

        $start = $page - 1;
        $start *= $qtd_posts;

        $posts = App::get('database')->selectAll('posts');
        $total_posts = count($posts);

        //Pegar o teto da divisão  
        $total_pages = ceil($total_posts/$qtd_posts);

        $posts_pagination = App::get('database')->pagination('posts', $start, $qtd_posts);
        // var_dump($posts_pagination[0]["author_post"]);
        // die();
        //Troco o id que está lá pelo nome do autor
        foreach($posts_pagination as $post){
            $aux = App::get('database')->selectUserName($post->author_post);

            $post->author_post = $aux;        
        }

        $identificador = 'postList';
        
        return view('site/postList', compact('posts', 'total_pages', 'qtd_posts', 'total_posts', 'start', 'posts_pagination', 'page', 'identificador'));
    }

    public function search(){
        $valor_buscado = $_GET['search'];
        $posts_pagination = App::get('database')->searchPost($valor_buscado);

        return view('site/postList', compact('posts_pagination'));
    }
}