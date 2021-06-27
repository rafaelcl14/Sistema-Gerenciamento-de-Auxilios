<div class="shadow-none p-3 mb-5 bg-light rounded">

    <h3> <div class="p-3 mb-2 bg-success text-white rounded">Cadastro de Núcleo Familiar</div></h3>
</div>



          <div class="content">
            <div class="row">
              <div class="col-md-4 ">
                <div class="shadow-none p-3 mb-5 bg-light rounded" >

                    <div class="">
                          <div class="form-group col-md-12">
                            <label for="cpf-aluno-cadastro ">Digite CPF do Aluno *</label>
                            <input type="number" class="form-control" value="" id="id-aluno-cpf" placeholder="000.000.000-00" required>
                          </div>
                      <div class="card card-user">
                        <div class="card-body">
                          <div class="author">
                              <div class="d-flex justify-content-center">
                                    <img class="rounded-circle" src=""  alt="Foto Aluno" width="50%" height="50%">
                              </div>
                            <br>
                              <h5 class="title ">....</h5>
                            <p class="description">
                              CPF: 000.000.000-00
                            </p>
                          </div>
                        </div>
                      </div>
                      <br>
                  <div class="card card-user">
                    <div class="card-body">
                      <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active btn-success" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Nucleo Familiar</a>
                        <a class="list-group-item list-group-item-action btn-success" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Documantação</a>
                      </div>
                    </div>
                  </div>
              </div>

            </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

              <form class="cadastroAluno shadow-none p-3 mb-5 bg-light rounded" action="index.html" method="post" style="background-color:#DCDCDC;">
                    <br>
                    <h3>Dados Pessoais</h3>
                    <br>
                    <div class="form-row">
                      <!--Nome do Aluno-->
                      <div class="form-group col-md-6">
                        <label for="nome-aluno-cadastro">Nome *</label>
                        <input type="text" class="form-control" value="" id="id-nome-aluno" placeholder="Nome Completo"required>
                      </div>
                      <!--RG do aluno -->
                      <div class="form-group col-md-3">
                        <label for="rg-aluno-cadastro">RG *</label>
                        <input type="number" class="form-control" value="" id="id-aluno-rg" data-toggle="popover" title="Registro Nacional"  placeholder="000000-0" required>
                      </div>
                      <!--Orgão expedidor-->
                      <div class="form-group col-md-3">
                        <label for="orgao-expedidor-aluno-cadastro">Órgão expedidor *</label>
                        <input type="text" class="form-control" value="" id="id-aluno-orgao-expedidor" placeholder="Órgão expedidor" required>
                      </div>
                      <!--CPF do aluno -->
                      <div class="form-group col-md-3">
                        <label for="cpf-aluno-cadastro">CPF *</label>
                        <input type="number" class="form-control" value="" id="id-aluno-cpf" placeholder="000.000.000-00" required>
                      </div>
                      <!--Data de Nascimento do aluno -->
                      <div class="form-group col-md-3">
                        <label for="data-nascimento-aluno-cadastro">Data de Nascimento *</label>
                        <input type="date" class="form-control" value="" id="id-aluno-data-nascimento"  placeholder="Dia/Mês/Ano" required>
                      </div>
                      <!--Naturalidade do aluno -->
                      <div class="form-group col-md-3">
                        <label for="naturalidade-aluno-cadastro">Naturalidade *</label>
                        <input type="text" class="form-control" value="" id="id-aluno-naturalidade" placeholder="Local de Nascimento" required>
                      </div>
                      <!--UF do aluno -->
                      <div class="form-group col-md-3">
                        <label for="uf-aluno-cadastro">UF *</label>
                        <select class="custom-select mr-sm-2" value="" id="id-alunp-uf" required>
                          <option selected>Selecione</option>
                          <option value="1">SP</option>
                          <option value="2">RO</option>
                          <option value="3">Outros</option>
                        </select>
                      </div>
                      <!--Sexo do aluno-->
                      <div class="form-group col-md-3">
                        <label for="sexo-aluno-cadastro">Sexo *</label>
                        <select class="custom-select mr-sm-2" value="" id="id-aluno-sexo" required>
                          <option selected>Selecione </option>
                          <option value="1">Masculino</option>
                          <option value="2">Feminino</option>
                          <option value="3">Outros</option>
                        </select>
                      </div>
                      <!--Telefone do aluno -->
                      <div class="form-group col-md-3">
                        <label for="telefone-aluno-cadastro" class="control-label">Telefone *</label>
                        <input type="number" class="form-control" value="" id="id-aluno-telefone" placeholder="Ex: (00) 0000-0000" required>
                        <div class="help-block with-errors"></div>
                      </div>
                      <!--Endereço de email do aluno-->
                      <div class="form-group col-md-3">
                        <label for="email-aluno-cadastro">Endereço de email *</label>
                        <input type="email" class="form-control" value="" id="id-aluno-email" aria-describedby="emailHelp" placeholder="Ex: meuEmail@gmail.com" required>
                      </div>
                      <!--Filiação Familiar-->
                      <div class="form-group col-md-3">
                        <label for="nucleo-filiacao">Parentesco *</label>
                        <select class="custom-select mr-sm-2" name="parentesco" id="id-nucleo-parentesco"  value="" required>
                          <option selected>Grau de Parentesto</option>
                          <option value="1">Pai/Mãe</option>
                          <option value="2">Avô/Avó</option>
                          <option value="3">Irmã(o)</option>
                          <option value="4">Tia/Tio</option>
                          <option value="5">Responsavel Legal</option>
                        </select>
                      </div>
                      <!--Renda-->
                      <div class="form-group col-md-3">
                        <label for="nucleo-filiacao">Possui Renda *</label>
                        <select class="custom-select mr-sm-2" id="id-nucleio-renda" value="" required>
                          <option selected>Selecione</option>
                          <option value="1">Sim</option>
                          <option value="2">Não</option>
                        </select>
                      </div>
                  </div>
                  <br>
                  <div class="form-row buton">
                    <button type="button" class="btn btn-success">Salvar Dados Cadastrados</button>
                  </div>
                  <br>
                  <br>
              </form>
              <br>
              <br>
              <div class="d-flex justify-content-center">
                <div class="form-row buton">
                  <button type="button" class="btn btn-success">Adicionar Familiar</button>
                </div>
              </div>
                <br>
                <br>
                <br>
              <form class="cadastroAluno shadow-none p-3 mb-5 bg-light rounded" action="index.html" method="post" style="background-color:#DCDCDC;">
                    <br>
                    <h3>Dados de Localização</h3>
                    <br>
                  <div class="form-row">
                    <!--Esdereço do Aluno-->
                    <div class="form-group col-md-3">
                      <label for="endereco-aluno-cadastro">Rua *</label>
                      <input type="text" class="form-control" value="" id="id-aluno-rua" placeholder="Nome da Rua" required>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="endereco-aluno-cadastro">Bairro *</label>
                      <input type="text" class="form-control" value="" id="id-aluno-bairro" placeholder="Nome do Bairro" required>
                    </div>
                      <!--Esdereço do Aluno-->
                    <div class="form-group col-md-3">
                      <label for="endereco-aluno-cadastro">Número *</label>
                      <input type="text" class="form-control" value="" id="id-aluno-numero" placeholder="N° da Residência" required>
                    </div>
                    <!--Compplemento do Endereço-->
                    <div class="form-group col-md-3">
                      <label for="complemento-aluno-cadastro">Complemento *</label>
                      <input type="text" class="form-control" value="" id="id-aluno-complemento" placeholder="Apartamento, Casa, etc." required>
                    </div>
                    <!--Cidade do Aluno-->
                      <div class="form-group col-md-3">
                        <label for="cidade-aluno-cadastro">Cidade *</label>
                        <input type="text" class="form-control" value="" id="id-aluno-cidade" placeholder="Nome da Cidade" required>
                      </div>
                      <!--Estado que aluno mora -->
                      <div class="form-group col-md-3">
                        <label for="estado-aluno-cadastro">Estado *</label>
                        <select value="" id="id-aluno-estado" class="form-control" required>
                          <option selected>Selecione Estado</option>
                          <option>RO</option>
                        </select>
                      </div>
                      <!--CEP do aluno -->
                      <div class="form-group col-md-3">
                        <label for="cep-aluno-cadastro">CEP *</label>
                        <input type="number" class="form-control" value="" id="id-aluno-cep" placeholder="00000-000" required>
                      </div>
                </div>
                <div class="form-row buton">
                  <button type="button" class="btn btn-success">Salvar Dados Cadastrados</button>
                </div>
                <br>
                <br>
              </form>
            </div>

            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
              <div class="shadow-none p-3 mb-5 bg-light rounded">
                <!--https://www.dropzonejs.com/#installation para configurar no servidor-->
                <h5>Arraste e Solte a documentação dento do campo estipulado</h5>
                <br>
              <form action="/file-upload" class="dropzone">
                <div class="fallback">
                  <input name="file" type="file" multiple />
                </div>
              </form>
              <br>
              <div class="form-row buton">
                <button type="button" class="btn btn-success">Salvar Documantação</button>
              </div>
              <br>
              <br>
              </div>

            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
          </div>
        </div>
      </div>
    </div>
  </div>
