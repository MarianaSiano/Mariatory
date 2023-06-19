<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ExampleController
{   
    public function dashboard() 
    { 
        return view('admin/dashboard');
    }

    public function postList() 
    { 
        return view('site/postList');
    }


    public function login(){
        return view('site/login');
    }

    public function listaDeUsuarios() 
    { 
        return view('admin/listaDeUsuarios');
    }
    public function listaPostAdm() 
    { 
        return view('admin/listaPostAdm');
    }

    public function landingPage() 
    { 
        return view('site/landingPage');
    }

    public function vpost(){
        return view('site/vpost');
    }

    public function vpost2() 
    {
        $id = ($_GET['id']);

        $post = App::get('database')->viewPost($id);

        // die(var_dump($post));

        $aux = App::get('database')->selectUserName($post[0]->author_post);

        $post[0]->author_post = $aux;

        return view('site/vpost2', compact('post'));
    }
}