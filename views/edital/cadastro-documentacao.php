<div class="shadow-none p-3 mb-5 bg-light rounded">
<h3><div class="p-3 mb-2 bg-success text-white rounded">Cadastro de Documentação</div></h3>
</div>
<br>
  <form class="" action="index.html" method="post">
  <div class="shadow-none p-3 mb-5 bg-light rounded">
    <br>
    <h3>Dados do Edital</h3>
    <br>
      <div class="d-flex justify-content-center">

        <div class="form-group col-md-4">
          <label for="cadas-edit-numero-doc-sei">Número de Documento SEI*</label>
          <input type="number" class="form-control" name="numero-documento" value=""id="edital-n-documento" placeholder="Informe o número de documento sei do edital"required>
        </div>

          <div class="form-group col-md-3">
            <label for="cadas-edit-titulo">Título*</label>
            <input type="text" class="form-control" name="titulo"  value="" id="eital-titulo" placeholder="Informe o título do edital" required>
          </div>
      </div>
        <br>
  </div>
</form>

<br>
<form class="" action="index.html" method="post">
  <div class="shadow-none p-3 mb-5 bg-light rounded">
    <br>
    <h3>Documentos Nescessários</h3>
    <br>
      <div class="d-flex justify-content-center">

          <div class="form-group col-md-3">
            <label for="email-aluno-cadastro"> Grupo*</label>
            <input type="text" class="form-control" value="" id="id-aluno-email" aria-describedby="emailHelp" placeholder="Ex: Trabalhador Assaláriado" required>
          </div>

          <div class="form-group col-md-3">
            <div class="mb-3">
              <label for="validationTextarea">Descrição*</label>
              <textarea class="form-control " id="validationTextarea" placeholder="Ex: Comprovante Contracheque" required></textarea>
            </div>
          </div>
      </div>

      <div class="form-row buton">
        <button type="button" class="btn btn-success">Adicionar Nova Descrição</button>
      </div>
      <br>
      <br>
      <div class="d-flex justify-content-center">

        <div class="form-group buton">
          <button type="button" class="btn btn-success">Salvar Grupo</button>
        </div>
        <br>
        <br>
        <br>
      </div>
  </div>
</form>

      <div class="shadow-none p-3 mb-5 bg-light rounded">
        <div class="d-flex justify-content-center">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1" checked>
            <label class="form-check-label" for="exampleRadios1">
              <dt>Trabalhador Assaláriado</dt>
                            <ol>Três últimos comprovantes de vencimentos (contracheques ou holerites).</ol>
                            <ol>Carteira de Trabalhao CTPS, Paginas último registro e seguintes.</ol>

            </ul>
            </label>
          </div>
          <ul>
              <!---->
        </div>

      </div>
