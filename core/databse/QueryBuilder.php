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
                    password
                ) VALUES (
                    '{$dados['name']}', 
                    '{$dados['email']}', 
                    '{$dados['password']}'
                )"
            );

            $res->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function editPosts($dados)
    {
        //nada
    }

    public function editUsers($dados)
    {
        //Tratamento para a geração da consulta  

        $id = $dados["id"];

        $con = "UPDATE `users` 
            SET `name` = '{$dados['name']}', 
                `email` = '{$dados['email']}', 
                `password` = '{$dados['password']}' 
            WHERE `users`.`id` = $id";

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
            $res = $this->pdo->prepare("DELETE FROM $table WHERE $table.id = $id");
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
            $res = "SELECT * FROM users ORDER BY name ASC LIMIT {$start}, {$limit}";
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
}
