<?php 

namespace App\Model;

class Conexao{
    private static $instance;
    
    public static function getConn(){
        try {
            if(!isset(self::$instance)){
                self::$instance = new \PDO('mysql:host=localhost;dbname=sistemamedico;charset=utf8', 'root', '');
            }

                return self::$instance;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}