<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CommentController
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function createComments()
    {
        $parametros = [
            'username' => $_POST['username'],
            'comment_text' => $_POST['comment_text'],
        ];

        App::get('database')->insertComments($parametros);
        header('Location: /vpost');
    }

    public function show()
    {
        $comments = App::get('database')->selectAll('comments');

        $commentsList = [
            'comments' => $comments
        ];

        return view('site/vpost', $commentsList);
    }
}
