<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController{
    public function view(){
        return view('admin/listaPost');
    }

    public function createPosts()
        {
            $parametros = [
                'title' => $_POST['title'],
                'author' => $_POST['author'],
                'sinopsis' => $_POST['sinopsis'],
                'review' => $_POST['review'],
                'rating' => $_POST['rating'],

            ];

            App::get('database') -> insertUsuarios($parametros);
            header('Location: /listaPost');


        }
    

}