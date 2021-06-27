<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    require_once '../../resources/database.php';
    
    $db = new Database();
    $conn = $db->conn;
    
    $estado = $_POST['estado'];
    
    
        $sql = "select cidade.id_cidade, cidade.nome as nome_cidade, estado.id_estado, estado.nome as nome_estado, estado.uf  from estado inner join cidade on estado.id_estado = cidade.fk_estado where estado.id_estado = :estado";
        
        $saida;

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':estado', $estado);
            $stmt->execute();
            $linha = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $saida = $linha ? $linha : "";
          } catch (\Exception $e) {
            $saida = "";
          }

    echo json_encode($saida);