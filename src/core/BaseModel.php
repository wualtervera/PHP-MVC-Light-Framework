<?php

namespace PHPMVC\Core;

use PDO;
use PHPMVC\Core\DB;

class BaseModel
{
    //private $conn; //data base handler
    private $stmt;

    private $instance;
    private $conn;

    function __construct()
    {
        $this->instance = DB::getInstance();
        $this->conn = $this->instance->getConnection();
    }
    
    //preparar consulta
    public function query($sql)
    {
        //echo 'Hola desde query '. $sql;
        $this->stmt = $this->conn->prepare($sql);
    }

    //unir valores
    public function bind($parametro, $valor, $tipo = null)
    {

        if (is_null($tipo)) {
            switch (true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;
                default:
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindValue($parametro, $valor, $tipo);
    }

    //ejecutar instruccion
    public function execute()
    {
        return $this->stmt->execute();
    }

    //obtener los registros de la consulta
    public function responseAll()
    {
        $this->execute();
        $res = $this->stmt->fetchAll(PDO::FETCH_OBJ);
        $this->stmt = null;
        
        return $res;
    }

    //obtener los registro de la consulta
    public function responseUnique()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //obtener cantidad de registros
    public function rowsCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }

    /* private function __clone()
    {
    }
    final public function __wakeup()
    {
    } */

    //LOGIN
    //https://www.youtube.com/watch?v=QFhE5AsmBnk&ab_channel=FreddyCamachoGarcia


}
