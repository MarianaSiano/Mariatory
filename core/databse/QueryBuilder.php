<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        try {
            $res = $this->pdo->prepare("SELECT * from {$table}");

            $res->execute();

            return $res->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // Função para selecionar os últimos 5 posts cadastrados
    public function selectFive($table)
    {
        $res = "SELECT * FROM {$table} ORDER BY created_at DESC LIMIT 5";
        
        try {
            $res = $this->pdo->prepare($res);

            $res->execute();

            return $res->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectUserName($id){
        try{
            $res = $this->pdo->prepare("SELECT name from users WHERE id = {$id}");
            
            $res->execute();

            return $res->fetch()[0];
        }catch (Exception $e) {
            die($e->getMessage());
        }
    }

    

    public function insertUsuarios($dados)
    {
        try {
            $res = $this->pdo->prepare(
                "INSERT INTO users(
                    name, 
                    email, 
                    password,
                    image
                ) VALUES (
                    '{$dados['name']}', 
                    '{$dados['email']}', 
                    '{$dados['password']}',
                    '{$dados['image']}'
                )"
            );

            $res->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function editPost($dados)
    {
        $query = "";
        $numeros = ['1', '2', '3', '4', '5'];
        if(!in_array($dados['rating'], $numeros)) { 
            unset($dados['rating']); 
        }
        
        foreach($dados as $key => $dado) { 
            if(!empty($dado) && $key != 'post_id') { 
                $query .= "{$key} = '{$dados[$key]}',";
            }  
        }
        $query = substr($query, 0, -1);
        $con = "UPDATE `posts` 
            SET {$query}
            WHERE `id` = {$dados['post_id']}";
        //die(var_dump($con));

        try {
            $res = $this->pdo->prepare($con);

            $res->execute();
        } catch (Exception $e) {
            die(var_dump($e->getMessage()));
        }
    }

    public function editUsers($dados, $flag)
    {
        //Tratamento para a geração da consulta  

        $id = $dados["id"];

        if($flag){
            $con = "UPDATE `users` 
            SET `name` = '{$dados['name']}', 
                `email` = '{$dados['email']}', 
                `password` = '{$dados['password']}',
                `image` = '{$dados['image']}'
            WHERE `users`.`id` = $id";
        }else{
            $con = "UPDATE `users` 
            SET `name` = '{$dados['name']}', 
                `email` = '{$dados['email']}', 
                `password` = '{$dados['password']}'
            WHERE `users`.`id` = $id";
        }

        try {
            $res = $this->pdo->prepare($con);

            $res->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        try {
            $res = $this->pdo->prepare("DELETE FROM $table WHERE id = $id");
            $res->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function loginQuery($email, $password)
    {
        try {
            $res = $this->pdo->prepare("SELECT * from users where email = '{$email}' and password = '{$password}'");

            $res->execute();

            if ($res->rowCount() > 0) {
                $dado = $res->fetch();

                $_SESSION['id'] = $dado['id'];

                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
        }
    }

    public function searchPost($title){
        $sql = "SELECT * FROM posts WHERE title LIKE '%{$title}%'";

        try {
            $stnt = $this->pdo->prepare($sql);
            $stnt->execute();


            return $stnt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function pagination($table, $start, $limit){
        if($table == 'posts'){
            $res = "SELECT * FROM posts ORDER BY created_at, title ASC LIMIT {$start}, {$limit}";
        }else{
            $res = "SELECT * FROM users ORDER BY id ASC LIMIT {$start}, {$limit}";
        }
        
        try{
            $res = $this->pdo->prepare($res);
            $res->execute();

            return $res->fetchAll(PDO::FETCH_CLASS);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function search(
        string $tabela, 
        string $campoParaPesquisar, 
        string $valorParaBuscar
    ) {
        $register = $this->pdo->prepare("SELECT * FROM $tabela WHERE $campoParaPesquisar = :valueToSearch limit 1");
        $register->execute([':valueToSearch' => $valorParaBuscar]);
        return $register->fetch(PDO::FETCH_OBJ);
    }

    public function createPost(mixed $dadosDoPost)
    {
       //die(var_dump($_SESSION));
        try {
            $res = $this->pdo->prepare(
                "INSERT INTO posts(
                    author_post, 
                    title, 
                    synopsis,
                    review,
                    rating,
                    gender,
                    image
                ) VALUES (
                    '{$_SESSION['id']}', 
                    '{$dadosDoPost['titulo']}', 
                    '{$dadosDoPost['sinopse']}',
                    '{$dadosDoPost['resenha']}', 
                    '{$dadosDoPost['avaliacao']}', 
                    '{$dadosDoPost['gender']}',
                    '{$dadosDoPost['imagem']}'
                )"
            );

            $res->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function destroy(
        string $tabela, 
        string $campoParaPesquisar, 
        string $valorParaBuscar
    ) {
        $register = $this->pdo->prepare("DELETE FROM $tabela WHERE $campoParaPesquisar = :valueToSearch");
        $register->execute([':valueToSearch' => $valorParaBuscar]);
        return $register->rowCount();
    }

    public function countAll($table)
    {

        $sql = "SELECT COUNT(*) FROM {$table}";

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            return intval($statement->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function searchUsers($name){
        $sql = "SELECT * FROM users WHERE name LIKE '%{$name}%'";

        try {
            $sql = $this->pdo->prepare($sql);

            $sql->execute();

            return $sql->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function viewPost($id){
        $sql = "SELECT * FROM posts WHERE id = '{$id}'";

        try {
            $sql = $this->pdo->prepare($sql);

            $sql->execute();

            return $sql->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //criar comentarios

    public function insertComments($dados){
        try{
            $res = $this->pdo->prepare(
                "INSERT INTO comments(
                    username,
                    comment_text,
                    post_id
                ) VALUES (
                    '{$dados['username']}',
                    '{$dados['comment_text']}',
                    '{$dados['post_id']}'
                )"    
            );

            $res->execute();
        } catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function selectComments($id){
        $sql = "SELECT * from comments WHERE post_id = {$id}";
        
        try{
            $sql = $this->pdo->prepare($sql);

            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_CLASS);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}