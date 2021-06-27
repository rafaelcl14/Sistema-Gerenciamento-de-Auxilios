<?php

//require_once 'Pessoa.php';

class Aluno {
   private $id;
   private $nome;
   private $rg;
   private $orgao_expedidor;
   private $cpf;
   private $data_nascimento;
   
   private $sexo;
   private $telefone;
   private $celular;
   private $email;
   private $fkLogin;
   
   // arrumar
   
   private $naturalidade;
   private $uf;
   
   // atributos localização 
   private $logradouro;
   private $bairro;
   private $numero;
   private $complemento;
   private $cep;
   private $fkCidade;
   
   // atributos curso 
   
   private $nomeCurso;
   private $modalidade;
   private $FkSerieTurma;
   
   // tabela estado 
   
   private $estado;

           
   
   function __construct(/*$id,*/ $nome, $rg, $orgao_expedidor, $cpf, $data_nascimento, $sexo, $telefone, $celular, $email, $fkLogin,  
                        $logradouro, $bairro, $numero, $complemento, $cep, $fkCidade , $nomeCurso ,$modalidade, $FkSerieTurma) {
       //$this->id = $id;
       $this->nome = $nome;
       $this->rg = $rg;
       $this->orgao_expedidor = $orgao_expedidor;
       $this->cpf = $cpf;
       $this->data_nascimento = $data_nascimento;
       $this->sexo = $sexo;
       $this->telefone = $telefone;
       $this->celular= $celular;
       $this->email = $email;
       $this->fkLogin = $fkLogin;
       
     
       
       $this->logradouro = $logradouro;
       $this->bairro = $bairro;
       $this->numero = $numero;
       $this->complemento = $complemento;
       $this->cep = $cep;
       $this->fkCidade = $fkCidade;
       
       
       $this->nomeCurso = $nomeCurso;
       $this->modalidade = $modalidade;
       $this->FkSerieTurma = $FkSerieTurma;
       
   }

   function getNomeCurso() {
       return $this->nomeCurso;
   }

   function getModalidade() {
       return $this->modalidade;
   }

   function getFkSerieTurma() {
       return $this->FkSerieTurma;
   }

   function setNomeCurso($nomeCurso) {
       $this->nomeCurso = $nomeCurso;
   }

   function setModalidade($modalidade) {
       $this->modalidade = $modalidade;
   }

   function setFkSerieTurma($FkSerieTurma) {
       $this->FkSerieTurma = $FkSerieTurma;
   }

      
   function getLogradouro() {
       return $this->logradouro;
   }

   function getBairro() {
       return $this->bairro;
   }

   function getNumero() {
       return $this->numero;
   }

   function getComplemento() {
       return $this->complemento;
   }

   function getCep() {
       return $this->cep;
   }

   function getFkCidade() {
       return $this->fkCidade;
   }

   function setLogradouro($logradouro) {
       $this->logradouro = $logradouro;
   }

   function setBairro($bairro) {
       $this->bairro = $bairro;
   }

   function setNumero($numero) {
       $this->numero = $numero;
   }

   function setComplemento($complemento) {
       $this->complemento = $complemento;
   }

   function setCep($cep) {
       $this->cep = $cep;
   }

   function setFkCidade($fkCidade) {
       $this->fkCidade = $fkCidade;
   }

       function getFkLogin() {
        return $this->fkLogin;
    }

    function setFkLogin($fkLogin) {
        $this->fkLogin = $fkLogin;
    }

        function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getRg() {
        return $this->rg;
    }

    function getOrgao_expedidor() {
        return $this->orgao_expedidor;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getNaturalidade() {
        return $this->naturalidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }
    function getCelular() {
        return $this->celular;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    
    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setOrgao_expedidor($orgao_expedidor) {
        $this->orgao_expedidor = $orgao_expedidor;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }


    

}
