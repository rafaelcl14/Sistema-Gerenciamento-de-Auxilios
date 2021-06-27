<?php
  require_once '../model/edital/';
  echo __FILE__;
  /**
   *
   */
  class Edital_ctrl {

    function __construct(){
      $op = filter_input(INPUT_POST,'op');
      $this->verOpcao($op);
    }

    function verOpcao($op){
      switch ($op) {
        case 1:
          $this->cadastarTermo();
          break;
      }
    function recebeDados(){


    }
    }


  }






















 ?>
