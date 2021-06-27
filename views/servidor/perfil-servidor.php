<?php 
require_once 'control/servidor-ctrl.php';
require_once 'model/servidor/servidor.php';
   
    $a = Servidor_ctrl::perfil();
    $nome = $a->getNome();
    $siape = $a->getSiape();
    $nvAcesso = $a->getNvAcesso();
//$nome = servidor::func;

?>
<h3><div class="p-3 mb-2 bg-success text-white rounded">Perfil do Servidor</div></h3>
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
                          <h5>  <div class="d-flex justify-content-center"><?=Session::getNomeUsuario()?></div></h5>
                            </a>
                        <p class="description">SIAPE: <?=Session::getUsuario()?></p>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="card card-user">
                    <div class="card-body">
                      <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active btn-success" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Dados Pessoais</a>
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

              <form action="././banco-dados/cadastro-funcionario.php" method="post">
                <div class="shadow-none p-3 mb-5 bg-light rounded">
                  <br>
                  <h3>Dados do Servidor</h3>
                  <br>
                  <div class="form-row ">
                    <div class="form-group col-md-6">
                            <label for="nome-funcionario-cadastro">Nome *</label>
                            <input type="text" name="nome" class="form-control"  value="<?= $nome  ?>" id="id-nome-funcionario" readonly="">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="nome-funcionario-cadastro">SIAPE *</label>
                            <input type="text" name="siape" class="form-control"  value="<?= $siape ?>" id="id-SIAPE-funcionario" placeholder="Informe seu SIAPE"readonly="">
                    </div>
                    <div class="form-group col-md-4">
                            <label for="nome-funcionario-cadastro">Email *</label>
                            <input type="email" name="email" class="form-control"  value="" id="id-email-funcionario" placeholder="Informe seu Email"required>
                    </div>

                    <div class="form-group col-md-4">
                            <label for="nome-funcionario-cadastro">Data de Cadastro *</label>
                            <input type="date" name="data" class="form-control"  value="" id="id-data-funcionario" placeholder="Informe a Data Atual"required>
                    </div>
                    <div class="form-group col-md-4">
                            <label for="clasificacao">Classificação *</label>
                            
                            <input type="text" name="nv-acesso" class="form-control" id="id-nivel-acesso" value="<?php echo $nvAcesso == 1 ? 'Presidente' : 'Membro';  ?>" readonly="">
                                    
                            
                    </div>
                  </div>
                  <br>
                </div>
              <br>
              <br>

            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">

            </div>

            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
          </div>
        </div>
      </div>
    </div>
  </div>
