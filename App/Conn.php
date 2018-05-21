<?php
/**
 * Created by PhpStorm.
 * User: WM
 * Date: 20/50/18
 * Time: 15:18
 */

namespace App;


class Conn{

    public static function getDb(){
        return new \PDO("mysql:host=localhost;dbname=vagaJaDB","root","");
    } 
    public static function getCon(){
        $con = mysqli_connect("localhost", "root", null, "vagaJaDB");
        mysqli_set_charset($con, 'utf-8');

        // verificar se houve erro de conexao
        if (mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o Banco de Dados ß MYSQL '.mysqli_connect_error();
        }
        return $con;
    }
}