<?php
  require_once 'views/login/session.php';
  require_once 'resources/database.php';
  /*  verificar redirecionamento depois  */
  $db = new Database();
  $conn = $db->conn;

  function getDados($conn, $nomeTabela, $idTabela, $campo){
    $sql = 'SELECT * FROM '.$nomeTabela;
    echo $sql;
    $result = $conn ->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as  $value) {
      echo '<option value='.$value[$idTabela].'>'.$value[$campo].'</option>';
    }
  }
  function getCurso($conn, $nomeTabela, $idTabela, $campo, $campo2){
    $sql = 'SELECT * FROM '.$nomeTabela;
    echo $sql;
    $result = $conn ->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as  $value) {
      echo '<option value='.$value[$idTabela].'>'.$value[$campo].'  -  '.$value[$campo2].'</option>';
    }
  }
  
 ?>

<h3> <div class="p-3 mb-2 bg-success text-white rounded">Cadastrar</div></h3>
<br>


<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active btn btn-success" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Dados Pessoais</a>
      <a class="list-group-item list-group-item-action btn btn-success" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Dados Localização</a>
      <a class="list-group-item list-group-item-action btn btn-success" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Dados Curso</a>
      <a class="list-group-item list-group-item-action btn btn-success" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Documentação</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
        <form id="cadastro-aluno" class="cadastroAluno shadow-none p-3 mb-5 bg-light rounded" action="control/aluno-ctrl.php" method="post" style="background-color:#DCDCDC;">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <h3>Dados Pessoais</h3>
                    <br>
                    <div class="form-row">
                      <!--Nome do Aluno-->
                      <div class="form-group col-md-6">
                        <label for="nome-aluno-cadastro">Nome *</label>
                        <input type="text" class="form-control"  name="nome" id="id-nome-aluno" placeholder="Nome Completo"required>
                      </div>
                      <!--RG do aluno -->
                      <div class="form-group col-md-3">
                        <label for="rg-aluno-cadastro">RG *</label>
                        <input type="number" class="form-control"  name="rg" id="id-aluno-rg" placeholder="000000-0" required>
                      </div>
                      <!--Orgão expedidor-->
                      <div class="form-group col-md-3">
                        <label for="orgaoexpedidor">Órgão expedidor *</label>
                        <input type="text" class="form-control"  name="orgaoexpedidor" id="id-aluno-orgao-expedidor" placeholder="Órgão expedidor" required>
                      </div>
                      <!--CPF do aluno -->
                      <div class="form-group col-md-3">
                        <label for="cpf-aluno-cadastro">CPF *</label>
                        <input type="number" class="form-control"  name="cpf" id="id-aluno-cpf" placeholder="000.000.000-00" required>
                      </div>
                      <!--Data de Nascimento do aluno -->
                      <div class="form-group col-md-3">
                        <label for="data-nascimento-aluno-cadastro">Data de Nascimento *</label>
                        <input type="date" class="form-control"  name="datanascimento" id="id-aluno-data-nascimento"  placeholder="Dia/Mês/Ano" required>
                      </div>
                     
                      <!--UF do aluno -->
                      <div class="form-group col-md-3">
                        <label for="uf-aluno-cadastro">UF *</label>
                        <select class="custom-select mr-sm-2"  name="uf" id="id-aluno-uf" >
                          <option selected>Selecione </option>
                          <?php

                            getDados($conn,'estado', 'id_estado' , 'uf');

                           ?>

                        </select>
                      </div>
                       <!--Naturalidade do aluno -->
                      <div class="form-group col-md-3">
                        <label for="naturalidade-aluno-cadastro">Naturalidade *</label>
                          <select class="custom-select mr-sm-2"  name="naturalidade" id="id-aluno-uf" >
                          <option selected>Selecione </option>
                          <?php

                            getDados($conn,'cidade', 'id_cidade' , 'nome');

                           ?>

                        </select>
                      </div>
                      <!--Sexo do aluno-->
                      <div class="form-group col-md-3">
                        <label for="sexo-aluno-cadastro">Sexo *</label>
                        <select class="custom-select mr-sm-2"  name="sexo" id="id-aluno-sexo" required>
                          <option selected>Selecione</option>
                          <option value="M">Masculino</option>
                          <option value="F">Feminino</option>
                          <option value="O">Outros</option>
                        </select>
                      </div>
                      <!--Telefone do aluno -->
                      <div class="form-group col-md-3">
                        <label for="telefone-aluno-cadastro" class="control-label">Telefone </label>
                        <input type="number" class="form-control"  name="telefone" id="id-aluno-telefone" placeholder="Ex: (00) 0000-0000" required>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="celular-aluno-cadastro" class="control-label">Celular *</label>
                        <input type="number" class="form-control"  name="celular" id="id-aluno-telefone" placeholder="Ex: (00) 0000-0000" required>
                        <div class="help-block with-errors"></div>
                      </div>
                      <!--Endereço de email do aluno-->
                      <div class="form-group col-md-3">
                        <label for="email-aluno-cadastro">Endereço de email *</label>
                        <input type="email" class="form-control"  name="email" id="id-aluno-email" aria-describedby="emailHelp" placeholder="Ex: meuEmail@gmail.com" required>
                      </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
              <h3>Dados de Localização</h3>
              <br>
            <div class="form-row">
              <!--Esdereço do Aluno-->
              <div class="form-group col-md-3">
                <label for="endereco-aluno-cadastro">Rua *</label>
                <input type="text" class="form-control"  name="rua" id="id-aluno-rua" placeholder="Nome da Rua" >
              </div>
              <div class="form-group col-md-3">
                <label for="endereco-aluno-cadastro">Bairro *</label>
                <input type="text" class="form-control"  name="bairro" id="id-aluno-bairro" placeholder="Nome do Bairro" >
              </div>
                <!--Esdereço do Aluno-->
              <div class="form-group col-md-3">
                <label for="endereco-aluno-cadastro">Numero *</label>
                <input type="text" class="form-control"  name="numero" id="id-aluno-numero" placeholder="N° da Residencia" >
              </div>
              <!--Compplemento do Endereço-->
              <div class="form-group col-md-3">
                <label for="complemento-aluno-cadastro">Complemento *</label>
                <input type="text" class="form-control"  name="complemento" id="id-aluno-complemento" placeholder="Apartamento, Casa, etc." >
              </div>
              <!--Cidade do Aluno-->

                <!--Estado que aluno mora -->
                <div class="form-group col-md-3">
                  <label for="id-aluno-estado">Estado *</label>
                  <select  id="id-aluno-estado" class="form-control" name="estado" >
                    <option selected>Selecione Estado</option>
                    <?php

                    getDados($conn,'estado', 'id_estado' , 'nome');

                     ?>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="id-aluno-cidade">Cidade *</label>
                  <select  id="id-aluno-cidade" class="form-control" name="cidade" >
                    <option selected>Selecione Cidade </option>
                    <?php

                      getDados($conn,'cidade', 'id_cidade' , 'nome');


                     ?>
                  </select>
                </div>
                <!--CEP do aluno -->
                <div class="form-group col-md-3">
                  <label for="cep-aluno-cadastro">CEP *</label>
                  <input type="number" maxlength="8" class="form-control"  name="cep" id="id-aluno-cep" placeholder="00000-000" >
                </div>
          </div>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">

                  <h3>Dados do Curso</h3>
                  <br>
                <div class="form-row">
                  <div class="form-group col-md-6">
                        <label for="curso-aluno-cadastro">Curso *</label>
                        <select class="custom-select mr-sm-2"  name="curso" id="id-aluno-curso" >
                          <option selected>Selecione</option>

                          <?php

                            getCurso($conn,'curso', 'id_curso' , 'nome', 'modalidade');



                           ?>
                        </select>
                      </div>
                      <!--Modalidade do curso-->
                      
                      <!--Serie/Turma do aluno-->
                      <div class="form-group col-md-3">
                        <label for="serie-turma-aluno-cadastro">Serie - Turma *</label>
                        <select class="custom-select mr-sm-2"  name="stp" id="id-aluno-curso" >
                          <option selected>Selecione</option>

                          <?php

                                                     getDados($conn,'serie_turma', 'id_serie_turma' , 'nome');



                           ?>
                        </select>
                      </div>
                      <!--Atestado de Matricula do aluno-->
                      <div class="form-group col-md-3">
                        <label for="exampleInputNaturalidade">Atestado de Matrícula *</label>
                        <input type="text" class="form-control"  name="atestadomatricula" id="atestado-matrula" placeholder="Digite numero de atestado de matricula" >
                      </div>
                      <!--Escolaridade do aluno-->
                      <div class="form-group col-md-3">
                        <label for="escolaridade-aluno-cadastro">Escolaridade *</label>
                        <select class="custom-select mr-sm-2"  name="escolaridade" id="id-aluno-escolaridade" >
                          <option selected>Selecione </option>
                          <option value="1">Somente em escola pública</option>
                          <option value="2">Maior parte em escola pública</option>
                          <option value="3">Somente em escola particular sem bolsa de estudo</option>
                          <option value="4">Somente em escola particular com bolsa de estudo</option>
                          <option value="5">Maior parte em escola particular</option>
                        </select>
                      </div>
              </div>
              <div class="form-row buton">
                  
                  <button type="submit" class="btn btn-success" name="op" value="1">Salvar Dados Cadastrados
                  </button>
              </div>
              <br>
              <br>
            </div>
      </form>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <form class="cadastroAluno shadow-none p-3 mb-5 bg-light rounded" action="cadastro-aluno.php" method="post" style="background-color:#DCDCDC;">



    </form>
      </div>
    </div>
  </div>
</div>