<?php

class Database {
    private $host = 'localhost';
    private $port = 5432;
    private $dbname = 'sga';
    private $user = 'postgres';
    private $pass = 'sch31d3gg3r';

    public $conn;

    function __construct() {
        $this->open();
    }

    function open() {
        if(!$this->conn) {
            try {
              $this->conn = new PDO('pgsql:host='. $this->host . ';port='.$this->port.';dbname=' . $this->dbname, $this->user, $this->pass);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    function close() {
        try {
          unset($this->conn);
          //  pg_close($this->conn);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
//  new Database();
?>
