 <?php
/**
 *
 */
class Mod_login{
  private $usuario;
  private $senha;

  function __construct($usuario,$senha){
    $this->usuario = $usuario;
    $this->senha = $senha;
  }
  function getUsuario(){
    return $this->usuario;
  }
  function getSenha(){
    return $this->senha;
  }

  function setUsuario($user){
    $this->usuario = $user;
  }

  function setSenha($pass){
    $this->senha = $pass;
  }
}



  ?>
