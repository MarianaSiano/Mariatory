<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{
    public function view(){
        if(isset($_SESSION['id'])){
            return view('admin/dashboard');
        }else{
            return view('site/login');
        }
    }

    public function login(){

        if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);
            
            $redirect = App::get('database')->loginQuery($email, $password);

            if($redirect == true){
                if(isset($_SESSION['id'])){
                    header('Location: /dashboard');
                }else{
                    echo "Não está na sessão";
                }
            }else{
                echo "Não tem no banco";
            }
        }else{
            echo "E-mail ou senha vazios";
        }
        
    }

    public function logout(){
        if(!isset($_SESSION)){
            session_start();
        }
        
        session_destroy();

        header('Location: /login');
    }
}