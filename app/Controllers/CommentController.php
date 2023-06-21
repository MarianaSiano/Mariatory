<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

Class CommentController{
    public function createComments(){
        $parametros = [
            'username' => $_POST['username'],
            'comment_text' => $_POST['comment_text'],
            'post_id' => $_POST['post_id']
        ];

        App::get('database')->insertComments($parametros);
        $aux = intval($_POST['post_id']);
        // die(var_dump("Location: /vpost2?id='{$aux}'"));
        header("Location: /vpost2?id={$aux}");
    }
}