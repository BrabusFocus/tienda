<?php
  namespace  Raccoon\goRSS\model;

  use PDO;

class Database{
    private function __construct() {
        ;
    }

    public static function conectar(){
        try {
             return new \PDO('mysql:host=13.59.99.246:3306;dbname=tiendaonline', "fany", "brabus01",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static function cerrar()
    {

    }
  }
