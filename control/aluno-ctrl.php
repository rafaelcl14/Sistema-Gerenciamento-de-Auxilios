<?php

require_once '../model/aluno/Aluno.php';
require_once '../model/aluno/AlunoDao.php';
require_once '../views/login/session.php';

//require_once '../views/aluno/view-cadastro-aluno.php';

class Aluno_Crtl {
    
    
    
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
  public function  recebeDados(){
      
    $nome = filter_input(INPUT_POST, 'nome');
    $rg = filter_input(INPUT_POST, 'rg');
    $orgao_expedidor = filter_input(INPUT_POST, 'orgaoexpedidor');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $data_nascimento = filter_input(INPUT_POST, 'datanascimento');
 //   $naturalidade = filter_input(INPUT_POST, 'naturalidade');
 //   $uf = filter_input(INPUT_POST, 'uf');
    $sexo = filter_input(INPUT_POST, 'sexo');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $email = filter_input(INPUT_POST, 'email');
    $fkLogin = Session::getIdLogin();
    
    $logradouro = filter_input(INPUT_POST, 'rua');
    $bairro  = filter_input(INPUT_POST, 'bairro');
    $numero  = filter_input(INPUT_POST, 'numero');
    $complemento  = filter_input(INPUT_POST, 'complemento');
    $cep  = filter_input(INPUT_POST, 'cep');
    $fkCidade = filter_input(INPUT_POST, 'cidade');
    
    $nomeCurso = filter_input(INPUT_POST, 'curso');
    $modalidade = filter_input(INPUT_POST, 'modalidade');
    $FkSerieTurma = filter_input(INPUT_POST, 'stp');
    // 
    // verificação dos campos HTML com os atributos da classe aluno 
    $cadastro_Aluno = new Aluno( $nome, $rg, $orgao_expedidor, $cpf, $data_nascimento, $sexo, $telefone, $email, $fkLogin,  $logradouro, $bairro,
                                $numero, $complemento, $cep, $fkCidade, $nomeCurso , $modalidade ,$FkSerieTurma );
    
    return $cadastro_Aluno;
  }
  
  public function cadastrar(){
      
      
    $aluno = $this->recebeDados();
    //recebe a verificação se o usuario existe
    //$ex = $this->userExiste($aluno->get());
    //verifica os campo
   
    if (!empty($aluno->getNome()) && !empty($aluno->getRg()) && !empty($aluno->getOrgao_expedidor()) && !empty($aluno->getCpf())
               && !empty($aluno->getData_nascimento()) && !empty($aluno->getSexo()) && !empty($aluno->getTelefone()) && !empty($aluno->getEmail())
                && !empty($aluno->getLogradouro()) && !empty($aluno->getBairro()) && !empty($aluno->getNumero()) && !empty($aluno->getComplemento()) 
            && !empty($aluno->getCep())  && !empty($aluno->getNomeCurso())  && !empty($aluno->getModalidade())  && !empty($aluno->getFkSerieTurma())){
     
      $this->concluirSalvar($aluno);
    }else {
      //indica os erros
      //if (!$this->cpf_comparator) {
         // $_SESSION['cpf_invalido'] = true;
      //}
      //if ($ex) {
       // $_SESSION['usuario_existente'] = true;
      //}
     
     
         echo "<script>alert('Não foi possível salvar');</script>";
        header('location: ../index.php?p=cadastrodealuno');
    }
  }
  
  
  public function concluirSalvar($user){
      
        $alunoDao = new AlunoDao();
//      echo "tenta";
        
        //chama e verifica os dados retornados do insert no banco
        if (($alunoDao->salvarAluno($user)==1) && ($alunoDao->salvarEndereco($user)==1)) {
          //redirecionar pra página
          
         echo "<script>alert('Usuário Cadastrado!!');</script>";
        header('location: ../index.php?p=perfilaluno');
       }else {
         //verificar como mostrar
        echo "<script>alert('Cadastro Falhou!!');</script>";
   
        
      header('location: ../index.php?p=cadastrodealuno');
      }

  }
//  
//  public function cadastrarEndereco(){
//      
//      
//    $aluno = $this->recebeDados();
//    //recebe a verificação se o usuario existe
//    //$ex = $this->userExiste($aluno->get());
//    //verifica os campo
//   
//    if (!empty($aluno->getNome()) && !empty($aluno->getRg()) && !empty($aluno->getOrgao_expedidor()) && !empty($aluno->getCpf())
//               && !empty($aluno->getData_nascimento()) && !empty($aluno->getSexo()) && !empty($aluno->getTelefone()) && !empty($aluno->getEmail())
//                && !empty($aluno->getLogadouro()) && !empty($aluno->getBairro()) && !empty($aluno->getNumero()) && !empty($aluno->getComplemento()) && !empty($aluno->getCep())){
//     
//      $this->concluirSalvarEndereco($aluno);
//    }else {
//      //indica os erros
//      //if (!$this->cpf_comparator) {
//         // $_SESSION['cpf_invalido'] = true;
//      //}
//      //if ($ex) {
//       // $_SESSION['usuario_existente'] = true;
//      //}
//     
//     
//         echo "<script>alert('Não foi possível salvar');</script>";
//         //header('location: ../index.php?p=cadastrodealuno');
//    }
//  }
//  public function concluirSalvarEndereco($user){
//      
//        $alunoDao = new AlunoDao();
//        
//        
//        //chama e verifica os dados retornados do insert no banco
//        if ($alunoDao->salvarEndereco($user)==1) {
//          //redirecionar pra página
//          
//         echo "<script>alert('Usuário Cadastrado!!');</script>";
//         //header('location: ../index.php?p=perfilaluno');
//       }else {
//         //verificar como mostrar
//        echo "<script>alert('Cadastro Falhou!!');</script>";
//        
//      // header('location: ../index.php?p=cadastrodealuno');
//      }
//
//  }

    
}
new Aluno_Crtl();