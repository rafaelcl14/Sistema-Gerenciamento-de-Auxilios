<?php
  require_once 'mod-login.php';
  require_once '../resources/database.php';



/**
 *
 */
class Dao_login{
private $db;
private $conn;
  //salva a pessoa/aluno no banco de dados
  public function salvarPessoa($us){
    $this->db = new Database();
    $this->conn = $this->db->conn;
          if ($this->conn) {
            try {
                $sql = "INSERT INTO login VALUES( default, :usuario, :senha, false)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":usuario", $us->getUsuario());
                $stmt->bindValue(":senha", $us->getSenha());
                $stmt->execute();
                return $stmt->rowCount();
            } catch (Exception $e) {
                return 0;
            }
        }else {
          echo "desconectado!";
        }
      }
      // Realiza o login a partir do banco de dados
      public function fazerLogin($us){

        $this->db = new Database();
        $this->conn = $this->db->conn;
          if ($this->conn) {
            $sqlLogin = "SELECT * FROM LOGIN WHERE usuario = :usuario AND senha= :senha";
            try {
              $stmt = $this->conn->prepare($sqlLogin);
              //***************
              $stmt->bindValue(':usuario',$us->getUsuario());
              //criptografar
              $stmt->bindValue(':senha',$us->getSenha());
              $stmt->execute();
              $resultLogin = $stmt->fetch(PDO::FETCH_ASSOC);
              return $resultLogin;
            } catch (\Exception $e) {
              echo $e->getMessage();
              
              return 0;
            }
          }
      }


      //Funçao para verificar se o usuario já existe dentro do banco de dados
      function usuarioJaExsite($usuario){
        $db = new Database();
        $conn = $db->conn;
          $sqlLogin = "SELECT * FROM login WHERE usuario = :usuario";
          try {
              $stmt = $conn->prepare($sqlLogin);
              $stmt->bindValue(':usuario', $usuario);

              $stmt->execute();
              $resultLogin = $stmt->fetch(PDO::FETCH_ASSOC);
          } catch (\Exception $e) {
              echo $e->getMessage();
          }

          if($resultLogin) {
              return true;
          }
          return false;
      }
      // função para buscar o nome do usuario no momento do login
      function buscarNome($usuario, $func){
        $sql="";
        if($func){
          $sql = "SELECT * FROM funcionario WHERE id_funcionario_siape = :usuario";
        }else{
          $sql = "SELECT * FROM pessoa WHERE cpf = :usuario";
        }
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':usuario', $usuario);
            $stmt->execute();
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($linha);
            return $linha ? $linha['nome'] : "";
          } catch (\Exception $e) {
            return "";
          }
      }
      //funcao para buscar o id de login do usuario no momento do login
      function buscarIdLogin($usuario){
          $sqlLogin = "SELECT * FROM login WHERE usuario = :usuario";
          try {
              $stmt = $this->conn->prepare($sqlLogin);
              $stmt->bindValue(':usuario', $usuario);

              $stmt->execute();
              $linha = $stmt->fetch(PDO::FETCH_ASSOC);
              return $linha ? $linha['id_login'] : "";
          } catch (\Exception $e) {
              return "";
          }
      }


}


  ?>
