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
                    $_SESSION['login_error'] = "Não está na sessão";
                    header('Location: /login');
                }
            }else{
                $_SESSION['login_error'] = 'E-mail ou senha incorretos. Digite novamente!';
                header('Location: /login');
            }
        }else{
            $_SESSION['login_error'] = "Campos e-mail e/ou senha vazios";
            header('Location: /login');
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