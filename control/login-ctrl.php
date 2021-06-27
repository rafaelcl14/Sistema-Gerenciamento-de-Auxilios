<?php
require_once '../model/login/dao-login.php';
require_once '../views/login/session.php';
require_once '../resources/validacao.php';
/**
 *
 */
class Login_Ctrl{
  private $cpf_comparator ='';
//  private $email_comparator='';

  public function __construct(){
    $op = filter_input(INPUT_POST,'op');
    echo $op;
    $this->verOpcao($op);
  }
  //verifica as opções de ações na classe
  public function verOpcao($op){
    switch ($op) {
      case "1":
        $this->cadastrar();
        break;
      case "2":
        $this->login();
        break;
      case "3":
        $this->logout();
        break;
    }
  }
  public function recebeDados(){
    $usuario = preg_replace("/[^0-9]/", "",filter_input(INPUT_POST,'usuario'));//$_POST['cpf']
    $senha = filter_input(INPUT_POST,'senha');
    $log = new Mod_login($usuario,$senha);
    return $log;
  }
  //Inicia o processo de cadastro
  public function cadastrar(){
    $aluno = $this->recebeDados();
    $confirmacaoSenha = filter_input(INPUT_POST,'confirmacaoSenha');
    //compara o email
    $this->cpf_comparator = Validacao::validaCPF($aluno->getUsuario());
    //recebe a verificação se o usuario existe
    $ex = $this->userExiste($aluno->getUsuario());
    //verifica os campo
    if (($aluno->getSenha() === $confirmacaoSenha) && ($ex == false) && $this->cpf_comparator) {
      //envia o objeto para salvar
      $this->concluirSalvar($aluno);
    }else {
      //indica os erros
      if (!$this->cpf_comparator) {
          $_SESSION['cpf_invalido'] = true;
      }
      if ($ex) {
        $_SESSION['usuario_existente'] = true;
      }
    //  echo "<script>alert('Não foi possível salvar');</script>";
      header('location:../views/login/login-cadastro/view-cadastro.php');
    }
  }
    //função que envia as informações para o DAO(conexão com o banco) e retorna as informações para a tela do usuário
    private function concluirSalvar($user){
      $dao = new Dao_login();
//      echo "tenta";
        //chama e verifica os dados retornados do insert no banco
        if ($dao->salvarPessoa($user)==1) {
          //redirecionar pra página
          
         echo "<script>alert('Usuário Cadastrado!!');</script>";
         header('location:../views/login/login-login/view-login.php');
       }else {
//**************verificar como mostrar*****************
        echo "<script>alert('Cadastro Falhou!!');</script>";
        header('location:../views/login/login-cadastro/view-cadastro.php');
      }

    }
    //verifica a existência do usuário
    private function userExiste($cpf){
      $dao = new Dao_login();
      return $dao->usuarioJaExsite($cpf);
    }
    //inicia o processo de login
    public function login(){
      //recebe os dados da função de receber dados
      $log = $this->recebeDados();
      //Verifica se todos os campos foram preenchidos durante o envio
     if ($log->getUsuario()!=null && $log->getUsuario() != "" && $log->getSenha()!=null && $log->getSenha()!="") {
        $this->concluirLog($log);
      }else {
        echo "<script>alert('Login Falhou!!');</script>";
        header('location:../views/login/login-login/view-login.php');
      }
    }
    // envia os dados para verificação no banco de dados e retorna as informações para a view
    public function concluirLog($user){
      $dao = new Dao_login();
      $result = $dao->fazerLogin($user);
      if($result){
        $us=$result['usuario'];
        $isFunc = $result['e_funcionario'] == 't' ? true : false;
        $nomeUsuario = $dao->buscarNome($us, $isFunc);
        $id_login = $dao->buscarIdLogin($us);
        // sugestion: usar um if depois para verificar nome
        //cria a sessão
        Session::create($id_login, $us, $nomeUsuario, $isFunc);
        header('location:../views/login/redireciona.php');
      }else {
        //Retorna as informaçõe do erro
        echo "erro no resultado";
       $_SESSION['loginInvalido'] = true;
        header('location:../views/login/login-login/view-login.php');
      }
    }

    public function logout(){
      Session::destroy();
      header('location:../index.php');
    }


  }
      new Login_Ctrl();





 ?>
