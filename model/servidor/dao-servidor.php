<?php
require_once 'resources/database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Dao_servidor {
    private $db;
    private $conn;
    public function buscaServidor($id) {
     $this->db = new Database();
     $this->conn = $this->db->conn;
          if ($this->conn) {
            try {
                $sql = "SELECT * FROM funcionario WHERE fk_login = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":id", $id);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (Exception $e) {
                return 0;
            }
        }else {
          echo "desconectado!";
        }
      
    }
}
