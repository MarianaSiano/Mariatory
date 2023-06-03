<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function insertUser($dados){
        try{
            $res = $this->pdo->prepare("INSERT INTO users(name, email, password) VALUES ('{$dados['name']}', '{$dados['email']}', '{$dados['password']}')");
            
            $res->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function edit($table, $dados){
        //Tratamento para a geração da consulta  

        $con = "UPDATE {$table} SET ";
            
        //Concatena os conjuntos chave = 'valor'
        foreach($dados as $chave => $dados){
            $con = $con . "{$chave} = '{$dados}', ";
        }

        $con = rtrim($con, " " . ",");

        $con = $con . "WHERE id = {$dados['id']}";
        try{
            $res = $this->pdo->prepare($con);
            
            $res->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function delete($table, $id){
        try{
            $res = $this->pdo->prepare("DELETE FROM users WHERE id = '{$id}'");

            $res->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function loginQuery($email, $password){
        try{
            $res = $this->pdo->prepare("SELECT * from users where email = '{$email}' and password = '{$password}'");

            $res->execute();

            if($res->rowCount() > 0){
                $dado = $res->fetch();
                
                $_SESSION['id'] = $dado['id'];

                return true;
            }else{
                return false;
            }
        }catch(Exception $e){

        }
    }
}