<h3><div class="p-3 mb-2 bg-success text-white rounded">Cadastro do Servidor</div>
</h3>
<br>

<form action="././banco-dados/cadastro-funcionario.php" method="post">
  <div class="shadow-none p-3 mb-5 bg-light rounded">
    <br>
    <h3>Dados do Servidor</h3>
    <br>

    <div class="form-row ">

      <div class="form-group col-md-4">
              <label for="nome-funcionario-cadastro">Nome *</label>
              <input type="text" name="nome" class="form-control"  value="" id="id-nome-funcionario" placeholder="Informe seu Nome ">
      </div>

      <div class="form-group col-md-4">
              <label for="nome-funcionario-cadastro">Email *</label>
              <input type="email" name="email" class="form-control"  value="" id="id-email-funcionario" placeholder="Informe seu Email"required>
      </div>
      <div class="form-group col-md-4">
              <label for="nome-funcionario-cadastro">SIAPE *</label>
              <input type="text" name="siape" class="form-control"  value="" id="id-SIAPE-funcionario" placeholder="Informe seu SIAPE"required>
      </div>
      <div class="form-group col-md-2">
              <label for="nome-funcionario-cadastro">Senha *</label>
              <input type="password" name="senha"class="form-control"  value="" id="id-senha-funcionario" placeholder="Informe sua senha"required>
      </div>

      <div class="form-group col-md-2">
              <label for="nome-funcionario-cadastro">Data *</label>
              <input type="date" name="data" class="form-control"  value="" id="id-data-funcionario" placeholder="Informe a Data Atual"required>
      </div>
      <div class="form-group col-md-2">
              <label for="clasificacao">Classificação *</label>
              <select class="form-control " name="classificacao" value="" id="clasificacao" required>
                      <option selected>Selecione sua posição</option>
                      <option value="1">Membro</option>
                      <option value="2">Presidente</option>
              </select>
      </div>
    </div>
    </div>
    <br>
  </div>

      </form>



    <div>
      <div class="shadow-none p-3 mb-5 bg-light rounded">
        <br>
        <h3>Lista de Servidores</h3>
        <br>
        <?php
          require_once 'crud.php';
        ?>
      </div>
    </div>

