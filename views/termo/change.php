<?php

  class Change_termo{
    /*
    public $nome;
    public $texto;

    function Change_termo($nome, $termo){
      $this->nome = $nome;
      $this->termo = $termo;

    }*/

    function change_now($nome, $termo, $muda){
      
      return str_replace($muda, $nome, $termo);
    }
  }
 ?>
