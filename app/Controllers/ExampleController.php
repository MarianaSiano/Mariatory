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
        return view('admin/login');
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

    public function vpost() 
    { 
        return view('site/vpost');
    }
}