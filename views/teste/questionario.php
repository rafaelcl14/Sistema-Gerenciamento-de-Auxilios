<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../../resources/database.php';

$db = new Database();
$conn = $db->conn;

$nome_questionario = $_POST['nome'];
$conteudo_questionario = $_POST['conteudo'];

/*
$sql = "select * from edital where id_edital = :idEdital";

$saida;

try {
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':idEdital', $id_edital);
    $stmt->execute();
    $linha = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $saida = $linha ? $linha : "";
} catch (\Exception $e) {
    $saida = "";
}
*/

echo json_encode($conteudo_questionario);