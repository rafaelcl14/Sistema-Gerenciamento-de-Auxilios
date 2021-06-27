<?php
require_once 'resources/database.php';
$db = new Database();
$conn = $db->conn;

function getDados($conn, $nomeTabela, $idTabela, $campo){
  $sql = 'SELECT * FROM '.$nomeTabela;


  $result = $conn ->query($sql);
  $rows = $result->fetchAll(PDO::FETCH_ASSOC);
  foreach ($rows as  $value) {
    echo '<option value='.$value[$idTabela].'>'.$value[$campo].'</option>';
  }
}

$q = filter_input(INPUT_GET,'q');
if ($q){
 ?>
<div class="alert alert-success" role="alert">
    Cadastrado com sucesso!
</div>
 <?php }; ?>
<h3><div class="p-3 mb-2 bg-success text-white rounded">Cadastro de Termo</div></h3>
<br>
<form id="cadastro-termo" class="" action="control/Termo_ctrl.php" method="post">
<div class="shadow-none p-3 mb-5 bg-light rounded">
  <br>
  <h3>Dados do Edital</h3>
  <br>
    <div class="d-flex justify-content-center">

      <div class="form-group col-md-4">
        <label for="id-numero-edital">Número de Documento SEI*</label>
        <select class="form-control" name="id_edital" id="id-numero-edital" required>
          <option value="">Selecione um Edital</option>
          <?php getDados($conn,'edital','id_edital','numero_documento_sei'); ?>
        </select>
      <!--  <input type="number" class="form-control" name="numero-documento" value=""id="edital-n-documento" placeholder="Informe o número de documento sei do edital"required>-->

      </div>

        <div class="form-group col-md-3">
          <label for="id-titulo-edital">Título*</label>
          <input type="text" class="form-control" name="titulo"  value="" id="id-titulo-edital" placeholder="Título do edital" required>
        </div>
    </div>
      <br>
</div>


    <div class="shadow-none p-3 mb-5 bg-light rounded">
        <br>
        <h3>Dados do Termo</h3>
        <br>

    <div class="d-flex justify-content-center">

      <div class="form-group col-md-3">
        <label for="cadas-edit-numero-doc-sei">Nome*</label>
        <input type="text" class="form-control" name="nome-termo" id="edital-n-documento" placeholder="Ex: Termo de Responsabilidade"required>
      </div>
      <div class="form-group col-md-3">
        <label for="cadas-edit-numero-doc-sei">Data*</label>
        <input type="date" class="form-control" name="data-termo" id="edital-n-documento" required>
      </div>

    </div>
    </div>


    <div class="shadow-none p-3 mb-5 bg-light rounded">
        <br>
        <h3>Adicionar Campos </h3>
        <br>

    <div class="d-flex justify-content-center">
      <div class="d-flex">
        <div class="p-3"><button type="button" class="btn btn-success" onclick="add_text(1)">Nome</button></div>
        <div class="p-3"><button type="button" class="btn btn-success" onclick="add_text(2)">CPF</button></div>
        <div class="p-3"><button type="button" class="btn btn-success" onclick="add_text(3)">RG</button></div>
        <div class="p-3"><button type="button" class="btn btn-success" onclick="add_text(4)">Curso</button></div>
        <div class="p-3"><button type="button" class="btn btn-success" onclick="add_text(5)">Auxílio</button></div>
      </div>
    </div>

    <script type="text/javascript">
      var txt_add;

      function add_text(valor){
        switch (valor) {
          case 1:
              txt_add = '_nome_';
            break;
          case 2:
              txt_add = '_cpf_';
            break;
          case 3:
              txt_add = '_rg_';
            break;
          case 4:
              txt_add = '_curso_';
            break;
          case 5:
              txt_add = '_auxilio_';
            break;
          default: txt_add ='ver';
        }
        document.getElementById('validationTextarea').value += ' '+txt_add;
        document.form2.validationTextarea.focus();
      }
    </script>

    <div class="form-group col-md-12">
        <label for="validationTextarea">Texto do Termo*</label>
        <textarea class="form-control " name="validationTextarea" id="validationTextarea" placeholder="Texto referente ao termo" required></textarea>
    </div>

    </div>
      <div class="d-flex justify-content-center">
        <button class="btn btn-warning" type="submit" name="op" value="1">Enviar</button>
      </div>

    </form>
