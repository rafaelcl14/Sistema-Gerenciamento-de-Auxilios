<?php
require_once '../resources/database.php';
/**
 *
 */
class Dao_termo{
  private $db;
  private $conn;
    //salva o termo no banco de dados
    public function salvarTermo($termo){
      $this->db = new Database();
      $this->conn = $this->db->conn;
            if ($this->conn) {
              try {
                  $sql = "INSERT INTO termo VALUES( default, :nome, :texto,:data )";
                  $stmt = $this->conn->prepare($sql);
                  $stmt->bindValue(":nome", $termo->getNome());
                  $stmt->bindValue(":texto", $termo->getTexto());
                  $stmt->bindValue(":data", $termo->getData());
                  $stmt->execute();
                  return $stmt->rowCount();
              } catch (Exception $e) {
                  return 0;
              }
          }else {
            echo "desconectado!";
          }
        }
}



 ?>
