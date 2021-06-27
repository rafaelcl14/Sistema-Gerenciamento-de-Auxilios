<?php
require_once 'views/login/session.php';
require_once 'model/servidor/dao-servidor.php';
require_once 'model/servidor/servidor.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 *
 * Description of servidor-ctrl
 *
 * @author mathe
 */
class Servidor_ctrl{
    public function __construct(){
    $op = filter_input(INPUT_POST,'op');
    $this->verOpcao($op);
  }
  //verifica as opções de ações na classe
  public function verOpcao($op){
    switch ($op) {
      case "1":
        $this->cadastrar();
        break;
    }
  }
  public static function perfil(){
      if(Session::existeSession()){
          $id = Session::getIdLogin();
          $dao = new Dao_servidor();
          $result =  $dao->buscaServidor($id);
          
           $serv = new Servidor($result['nome'],$result['id_funcionario_siape'],$result['nivel_acesso']);
           if($result){
               return $serv;
            }else{
                return 'erro!';
                //echo 'erro!';
           } 
      }else{
          header('location:../index.php');
      }
  }
  public function montaPerfil($id){
     
  }
  
}
 new Servidor_ctrl();
