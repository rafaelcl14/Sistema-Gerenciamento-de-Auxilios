<?php
/**
 *
 */
class Termo{
  private $docSei;
  private $nome;
  private $data;
  private $texto;

  function __construct($docSei,$nome,$data,$texto){
    $this->docSei = $docSei;
    $this->nome = $nome;
    $this->data = $data;
    $this->texto = $texto;
  }
  public function getNome(){
    return $this->nome;
  }
  public function getData(){
    return $this->data;
  }
  public function getTexto(){
    return $this->texto;
  }
  public function getDocSei(){
    return $this->docSei;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }
  public function setData($data){
    $this->data = $data;
  }
  public function setTexto($texto){
    $this->texto= $texto;
  }
  public function setDocSei($docSei){
    $this->docSei = $docSei;
  }
}







 ?>
