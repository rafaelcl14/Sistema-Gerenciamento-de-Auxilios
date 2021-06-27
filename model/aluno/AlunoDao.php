<?php

require_once '../resources/database.php';
require_once 'Aluno.php';
//require_once 'Pessoa.php';


class AlunoDao {
  
    private $db;
    private $conn;
  //salva a pessoa/aluno no banco de dados
  public function salvarAluno($aluno){
    $this->db = new Database();
    $this->conn = $this->db->conn;
          if ($this->conn) {
            try {
                $sql = "INSERT INTO pessoa VALUES( default, :nome , :sexo, :data_nascimento, '123245' ,:numero_telefone, :celular ,:email, :cpf , :numero_identidade , :orgao_expedidor_identidade, :fkLogin)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":nome", $aluno->getNome());
                $stmt->bindValue(":sexo", $aluno->getSexo());
                $stmt->bindValue(":data_nascimento", $aluno->getData_nascimento());
                //numero_celular
                $stmt->bindValue(":numero_telefone", $aluno->getTelefone());
                $stmt->bindValue(":email", $aluno->getEmail());
                $stmt->bindValue(":cpf", $aluno->getCpf());
                $stmt->bindValue(":numero_identidade", $aluno->getRg());
                $stmt->bindValue(":orgao_expedidor_identidade", $aluno->getOrgao_expedidor());
                $stmt->bindValue(":fkLogin", $aluno->getFkLogin());
                $stmt->execute();   
                return $stmt->rowCount();
            } catch (Exception $e) {
                return 0;
            }            
        }else {
          echo "Não Cadastrado!";
        }
      }
      
      public function salvarEndereco($aluno){
            $this->db = new Database();
            $this->conn = $this->db->conn;
          if ($this->conn) {
            try {
                $sql = "INSERT INTO endereco VALUES( default, :logradouro , :numero, :complemento ,:bairro,:cep, :FkCidade)";
                $stmt = $this->conn->prepare($sql);
            //    $stmt->bindValue(":id", $aluno->getId());
                $stmt->bindValue(":logradouro", $aluno->getLogradouro());
                
                $stmt->bindValue(":numero", $aluno->getNumero());
                //numero_celular
                $stmt->bindValue(":complemento", $aluno->getComplemento());
                $stmt->bindValue(":bairro", $aluno->getBairro());
                $stmt->bindValue(":cep", $aluno->getCep());
                $stmt->bindValue(":FkCidade", $aluno->getFkCidade());
                
                
                
                $stmt->execute();
                
                return $stmt->rowCount();
            } catch (Exception $e) {
                return 0;
            } 
        }
    }    
    
    public function salvarCurso($aluno){
            $this->db = new Database();
            $this->conn = $this->db->conn;
          if ($this->conn) {
            try {
                $sql = "INSERT INTO curso VALUES( default, :nome , :modalidade, :fk_serie_turma)";
                $stmt = $this->conn->prepare($sql);
            //    $stmt->bindValue(":id", $aluno->getId());
                $stmt->bindValue(":nome", $aluno->getNomeCurso());
                
                $stmt->bindValue(":modalidade", $aluno->getModalidade());
                //numero_celular
                $stmt->bindValue(":fk_serie_turma", $aluno->getFkSerieTurma());
                $stmt->bindValue(":bairro", $aluno->getBairro());
                $stmt->bindValue(":cep", $aluno->getCep());
                $stmt->bindValue(":FkCidade", $aluno->getFkCidade());
                
                
                
                $stmt->execute();
                
                return $stmt->rowCount();
            } catch (Exception $e) {
                return 0;
            } 
        }
    } 
}   