<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuarioController
{
    public function view()
    {
        return view('admin/listaDeUsuarios');
    }

    public function createUsers()
    {
        $parametros = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => hash("sha512", $_POST['password'])
        ];

        App::get('database')->insertUsuarios($parametros);
        header('Location: /listaDeUsuarios');
    }

    public function show()
    {
        $users = App::get('database')->selectAll('users');

        $usersList = [
            'users' => $users
        ];

        return view('admin/listaDeUsuarios', $usersList);
    }

    public function deleteUsers()
    {
        App::get('database')->delete('users', $_POST['id']);
        header('Location: /listaDeUsuarios');
    }

    public function editUsers()
    {
        $parametros = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => hash("sha512", $_POST['password'])
        ];

        App::get('database')->editUsers($parametros);
        header('Location: /listaDeUsuarios');
    }
}
