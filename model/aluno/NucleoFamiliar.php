<?php

class NucleioFamiliar  {
  
     function __constructAluno($id, $nome , $rg , $orgao_expedidor, $cpf ,$data_nascimento, $naturalidade, $uf, $sexo, $telefone, $email, $rua, $bairro, $numero, $complemento, $estado, $cidade, $cep, $parentesco , $possui_rendar) {
        $this->id = $id;
        $this->nome = $nome;
        $this->rg = $rg;
        $this->orgao_expedidor = $orgao_expedidor;
        $this->cpf = $cpf;
        $this->data_nascimento = $data_nascimento;
        $this->naturalidade = $naturalidade;
        $this->uf =  $uf;
        $this->sexo = $sexo;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->numero= $numero;
        $this->complemento = $complemento;
        $this->estado = $estado;
        $this->cidade =  $cidade;
        $this->cep = $cep;
        $this->parentesco = $parentesco;
        $this->possui_renda = $possui_rendar;
    }
    
    
}
