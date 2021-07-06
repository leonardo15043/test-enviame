<?php


class Database
{
    static public function connection(){
        try {
            $dsn = "mysql:host=mysql_host;dbname=db_prueba;port=3306;charset=utf8mb4";
            $usuario = "root";
            $password = "root2020";
            $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $bd = new PDO($dsn,$usuario,$password,$opt);
         
            return $bd;
        
        } catch (PDOException $error) {
            echo "<h2>No me pude conectar con la Base de Datos <br></h2>".$error->getMessage();
            exit;
        }
    }
}