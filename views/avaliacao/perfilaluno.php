<h3><div class="p-3 mb-2 bg-success text-white rounded">Perfil do Aluno</div></h3>
<br>
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="shadow-none p-3 mb-5 bg-light rounded">
              <div class="d-flex justify-content-around">
                <div class="">
                  <div class="card card-user">
                    <div class="card-body">
                      <div class="author">
                        <a href="#">
                          <div class="d-flex justify-content-center">
                                <img class="rounded-circle" src="./images/perfil-pessoa-1.jpg"  alt="Circle Image" width="50%" height="50%">
                          </div>
                          <br>
                          <h5 class="title"><div class="d-flex justify-content-center"><?=Session::getNomeUsuario()?></div></h5>
                        </a>
                        <p class="description">
                          CPF: <?=Session::getUsuario()?>
                        </p>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="card card-user">
                    <div class="card-body">
                      <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active btn-success" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Dados Pessoais</a>
                        <a class="list-group-item list-group-item-action btn-success" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Nucleo Familiar</a>
                        <a class="list-group-item list-group-item-action btn-success" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Documentação</a>
                        <a class="list-group-item list-group-item-action btn-success" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Recursos</a>
                      </div>
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
                        <input type="number" class="form-control" value="" id="id-aluno-rg" placeholder="000000-0" required>
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
                          <option selected>Selecione</option>
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
                  </div>
                  <div class="form-row buton">
                    <button type="button" class="btn btn-success">Atualizar Dados</button>
                  </div>
                  <br>
                  <br>
              </form>
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
                          <option selected>Selecione </option>
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
                  <button type="button" class="btn btn-success">Atualizar Dados</button>
                </div>
                <br>
                <br>
              </form>
              <br>
              <form class="cadastroAluno shadow-none p-3 mb-5 bg-light rounded" action="index.html" method="post" style="background-color:#DCDCDC;">
                    <br>
                    <h3>Dados do Curso</h3>
                    <br>
                  <div class="form-row">
                    <div class="form-group col-md-3">
                          <label for="curso-aluno-cadastro">Curso *</label>
                          <select class="custom-select mr-sm-2" value="" id="id-aluno-curso" required>
                            <option selected>Selecione</option>
                            <option value="1">Técnico em Florestas</option>
                            <option value="2">Técnico em Informática</option>
                            <option value="4">Técnico em Química</option>
                            <option value="5">CST em Análise e Desenvolvimento de Sistemas(Tecnólogo)</option>
                            <option value="6">Engenharia Florestal (Bacharelado)</option>
                            <option value="7">Química (Licenciatura)</option>
                          </select>
                        </div>
                        <!--Modalidade do curso-->
                        <div class="form-group col-md-3">
                          <label for="modalidade-aluno-cadastro">Modalidade *</label>
                          <select class="custom-select mr-sm-2" value="" id="id-aluno-modalidade" required>
                            <option selected>Selecione</option>
                            <option value="1">Cursos de Graduação</option>
                            <option value="2">Cursos Técnicos Subsequentes</option>
                            <option value="3">Cursos Técnicos Integrados</option>
                          </select>
                        </div>
                        <!--Serie/Turma do aluno-->
                        <div class="form-group col-md-3">
                          <label for="serie-turma-aluno-cadastro">Serie/Turma/Período *</label>
                          <input type="text" class="form-control" value="" id="id-aluno-serie-turma" placeholder="Digite sua Série/Turma" required>
                        </div>
                        <!--Atestado de Matricula do aluno-->
                        <div class="form-group col-md-3">
                          <label for="exampleInputNaturalidade">Atestado de Matrícula *</label>
                          <input type="text" class="form-control" value="" id="atestado-matrícula" placeholder="Digite número de atestado de matrícula" required>
                        </div>
                        <!--Escolaridade do aluno-->
                        <div class="form-group col-md-3">
                          <label for="escolaridade-aluno-cadastro">Escolaridade *</label>
                          <select class="custom-select mr-sm-2" value="" id="id-aluno-escolaridade" required>
                            <option selected>Selecione</option>
                            <option value="1">Somente em escola pública</option>
                            <option value="2">Maior parte em escola pública</option>
                            <option value="3">Somente em escola particular sem bolsa de estudo</option>
                            <option value="4">Somente em escola particular com bolsa de estudo</option>
                            <option value="5">Maior parte em escola particular</option>
                          </select>
                        </div>
                </div>
                <div class="form-row buton">
                  <button type="button" class="btn btn-success">Atualizar Dados</button>
                </div>
                <br>
                <br>
              </form>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
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
                        <input type="number" class="form-control" value="" id="id-aluno-rg" placeholder="000000-0" required>
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
                          <option selected>Selecione</option>
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
                          <option value="3">Irmãos/Irmãs</option>
                          <option value="4">Tia/Tio</option>
                          <option value="5">Responsavel Legal</option>
                        </select>
                      </div>
                      <!--Renda-->
                      <div class="form-group col-md-3">
                        <label for="nucleo-filiacao">Possui Renda *</label>
                        <select class="custom-select mr-sm-2" id="id-nucleio-renda" value="" required>
                          <option selected> Renda</option>
                          <option value="1">Sim</option>
                          <option value="2">Não</option>
                        </select>
                      </div>
                  </div>
                  <br>
                  <div class="form-row buton">
                    <button type="button" class="btn btn-success">Atualizar Dados</button>
                  </div>
                  <br>
                  <br>
              </form>
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
                          <option selected>Selecione </option>
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
                  <button type="button" class="btn btn-success">Atualizar Dados</button>
                </div>
                <br>
                <br>
              </form>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <div id="galeria">
                  <ul>
                    <li><a href="#img1"><img src="images/01.jpg" class="min img-response" ></a></li>
                    <li><a href="#img2"><img src="images/02.jpg" class="min img-response" ></a></li>
                    <li><a href="#img3"><img src="images/03.jpg" class="min img-response" ></a></li>
                    <li><a href="#img4"><img src="images/04.jpg" class="min img-response" ></a></li>
                  </ul>

                  <div class="lbox" id="img1">
                      <div class="box_img">
                        <a href="#img4" class="btn" id="prev">&#171;</a>
                        <a href="#" class="btn" id="close">X</a>
                        <img src="images/01.jpg" alt="">
                        <a href="#img2" class="btn" id="next">&#187;</a>
                      </div>
                  </div>
                  <div class="lbox" id="img2">
                      <div class="box_img">
                        <a href="#img1" class="btn" id="prev">&#171;</a>
                        <a href="#" class="btn" id="close">X</a>
                        <img src="images/02.jpg" alt="">
                        <a href="#img3" class="btn" id="next">&#187;</a>
                      </div>
                  </div>
                  <div class="lbox" id="img3">
                      <div class="box_img">
                        <a href="#img2" class="btn" id="prev">&#171;</a>
                        <a href="#" class="btn" id="close">X</a>
                        <img src="images/03.jpg" alt="">
                        <a href="#img4" class="btn" id="next">&#187;</a>
                      </div>
                  </div>
                  <div class="lbox" id="img4">
                      <div class="box_img">
                        <a href="#img3" class="btn" id="prev">&#171;</a>
                        <a href="#" class="btn" id="close">X</a>
                        <img src="images/04.jpg" alt="" class="text-center">
                        <a href="#img1" class="btn" id="next">&#187;</a>
                      </div>
                  </div>
                  </div>
                </div>


            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
          </div>
        </div>
      </div>
    </div>
  </div>
