<?php

namespace PHPMVC\Core;
use PDO;
use PDOException;
class DB
{
    public static $conn = null;
    public static $instance = null;

    public static function getInstance()
    {

        if (is_null(self::$instance)) {
            self::$instance = new DB();
            self::connect();
        }
        return self::$instance;
    }

    public static function connect(){
        $host = DB_HOST;
        $port = DB_PORT;
        $user = DB_USER;
        $password = DB_PASSWORD;
        $db_name = DB_NAME;

        //configurar conexion

        //PostgreSql
        $dsn = "pgsql:host=$host;port=$port;dbname=$db_name"; //Data Source Name        
        //MySql
        //$dsn = "mysql:host=$host;dbname=$db_name";
        
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            self::$conn = new PDO($dsn, $user, $password, $options);
            self::$conn->exec(CHARSET);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return self::$conn;
    }

    public function close()
    {
        self::$conn->close();
    }

    //Desactivar instancias
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    final public function __wakeup()
    {
    }

}
