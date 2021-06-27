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

?>


<div class="shadow-none p-3 bg-light rounded">
    <h3>Dados do Questionário</h3>
    <br>

    <div class="shadow-none bg-light rounded">
        <form id="cadastro-termo" class="" action="control/Termo_ctrl.php" method="post">
            <div class="shadow-none rounded">

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

                    <div class="form-group col-md-5">
                        <label for="cadas-edit-titulo">Nome *</label>
                        <input type="text" class="form-control" name="titulo"  value="" id="eital-titulo" placeholder=" Informe o Nome do Questionário" required>
                    </div>
                </div>
                <br>
            </div>

        </form>









        <h3>Questionário</h3>
        <br>














        <div id="container-questionario" class="shadow-sm p-3 bg-white rounded form-group">

            <!-- CATEGORIAS -->
            <div id="categorias">
                <!--


                <div class="categoria  border rounded p-2 mb-3">

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="label-categoria form-control px-0">Categoria 1 - </div>
                        </div>
                        <input class="input-categoria form-control mx-3 px-0" type="text" value="INFORMAÇÕES FAMILIARES" placeholder="Digite o nome da categoria...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-danger btn-sm mb-2 rounded">Remover</button>
                        </div>
                    </div>


                    <div class="ml-4 questoes">


                        <div class="questao mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="label-questao form-control px-0">Questão 1 - </div>
                                </div>
                                <input class="input-enunciado form-control mr-1" type="text" value="Quem é a pessoa responsável financeiramente pela sua família?" placeholder="Digite o enunciado da questão...">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-danger btn-sm mb-2 rounded">Remover</button>
                                </div>
                            </div>
                            <div class="alternativas ml-4">
                                <div class="alternativa form-check">
                                    <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                    <input class="input-alternativa form-control p-0" type="text" value="Eu" placeholder="Digite o valor da alternativa...">
                                </div>
                                <div class="alternativa form-check">
                                    <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                    <input class="input-alternativa form-control p-0" type="text" value="Pai" placeholder="Digite o valor da alternativa...">
                                </div>
                                <div class="alternativa form-check">
                                    <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                    <input class="input-alternativa form-control p-0" type="text" value="Mãe" placeholder="Digite o valor da alternativa...">
                                </div>
                                <div class="alternativa form-check">
                                    <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                    <input class="input-alternativa form-control p-0" type="text" value="Pai e Mãe" placeholder="Digite o valor da alternativa...">
                                </div>
                                <div class="alternativa form-check">
                                    <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                    <input class="input-alternativa form-control p-0" type="text" value="Cônjuge/companheiro(a)" placeholder="Digite o valor da alternativa...">
                                </div>
                                <div class="alternativa form-check">
                                    <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                    <input class="input-alternativa form-control p-0" type="text" value="Cônjuge/companheiro(a) e eu" placeholder="Digite o valor da alternativa...">
                                </div>
                                <div class="alternativa form-check">
                                    <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                    <input class="input-alternativa form-control p-0" type="text" value="Avós" placeholder="Digite o valor da alternativa...">
                                </div>
                                <div class="alternativa form-check">
                                    <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                    <input class="input-alternativa form-control p-0" type="text" value="Tios" placeholder="Digite o valor da alternativa...">
                                </div>
                                <div class="alternativa form-check">
                                    <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                    <input class="input-alternativa form-control p-0" type="text" value="Irmão (a)" placeholder="Digite o valor da alternativa...">
                                </div>

                            </div>
                            <div class="d-flex justify-content-start mt-3 ml-4">
                                <button class="add-alternativa btn btn-outline-success btn-sm mb-2">+ Alternativa</button>
                                <div class="alternativa form-check my-2 ml-3">
                                    <input class="form-check-input" type="checkbox">
                                    <div>Permitir outra alternativa informada pelo aluno?</div>
                                </div>
                            </div>

                        </div>


                        <div class="questao mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="label-questao form-control px-0">Questão 2 - </div>
                                </div>
                                <input class="input-enunciado form-control mr-1" type="text" value="Você tem plano de saúde?" placeholder="Digite o enunciado da questão...">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-danger btn-sm mb-2 rounded">Remover</button>
                                </div>
                            </div>
                            <div class="alternativa form-check ml-4">
                                <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                <div>Sim</div>
                            </div>
                            <div class="alternativa form-check ml-4">
                                <input class="form-check-input" type="radio" name="alternativa1" disabled>
                                <div>Não</div>
                            </div>
                        </div>


                        <div class="questao mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="label-questao form-control px-0">Questão 3 - </div>
                                </div>
                                <input class="input-enunciado form-control mr-1" type="text" value="Descreva algo que julgue necessário aqui:" placeholder="Digite o enunciado da questão descritiva...">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-danger btn-sm mb-2 rounded">Remover</button>
                                </div>
                            </div>
                            <div class="form-group ml-4">
                                <textarea class="form-control" rows='1' disabled></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start">
                        <div class="dropdown">
                            <button class="btn btn-outline-success btn-sm mb-2 mt-4 ml-4 dropdown-toggle" type="button" id="id-add-questao" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+ Questão</button>
                            <div class="dropdown-menu" aria-labelledby="id-add-questao">
                                <button class="quest-afirmativa dropdown-item">Afirmativa</button>
                                <button class="quest-descritiva dropdown-item">Descritiva</button>
                                <button class="quest-escolha dropdown-item">Multipla escolha</button>
                                <div class="dropdown-divider"></div>
                                <button class="quest-cadastrada dropdown-item">Questão cadastrada</button>

                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>

            <div class="d-flex justify-content-start">
                <button id="id-add-categoria" class="btn btn-outline-success btn-sm mb-2">+ Categoria</button>
            </div>

            <div class="d-flex justify-content-center">
                <button id="id-salvar-questionario" class="btn btn-primary mt-4 mb-2">Salvar Questionario</button>
            </div>
        </div>
    </div>
</div>
