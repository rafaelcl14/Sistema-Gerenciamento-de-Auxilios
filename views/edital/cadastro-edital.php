<div class="shadow-none p-3 mb-5 bg-light rounded">
<h3><div class="p-3 mb-2 bg-success text-white rounded">Cadastro de Edital</div></h3>
</div>
<form class="" action="index.html" method="post">
  <div class="shadow-none p-3 mb-5 bg-light rounded">


  <br>
  <h3>Dados do Edital</h3>
  <br>
        <div class="form-row 1">
            <div class="form-group col-md-6">
              <label for="cadas-edit-titulo">Título*</label>
              <input type="text" class="form-control" name="titulo"  value="" id="eital-titulo" placeholder="Informe o título do edital" required>
            </div>

            <div class="form-group col-md-6">
              <label for="cadas-edit-cabecalho">Cabeçalho*</label>
              <input type="text" class="form-control"  name="cabeçalho" value="" id="edital-cabecalho" placeholder="Informe o cabeçalho do edital" required>
            </div>

            <div class="form-group col-md-6">
              <label for="cadas-edit-numero-proc-sei">Número de Processo SEI*</label>
              <input type="number" class="form-control" name="numero-processo" value=""id="edital-n-processo" placeholder="Informe o número de processo sei do edital" required>
            </div>

            <div class="form-group col-md-6">
              <label for="cadas-edit-numero-doc-sei">Número de Documento SEI*</label>
              <input type="number" class="form-control" name="numero-documento" value=""id="edital-n-documento" placeholder="Informe o número de documento sei do edital"required>
            </div>

            <div class="form-group col-md-6">
              <label for="cadas-edit-link">Link*</label>
              <input type="url" class="form-control" name="link" value=""id="edital-link" placeholder="Informe o link de publicação do edital" required>
            </div>

            <div class="form-group col-md-3">
              <label for="cadas-edit-data">Data*</label>
              <input type="date" class="form-control" name="data" value=""id="edital-data"  placeholder="Dia/Mês/Ano" required>
            </div>

            <div class="form-group col-md-3">
              <label for="cadas-edit-data">Hora*</label>
              <input type="time" class="form-control" value="" id="edital-hora" name="hora" placeholder="Hora/Minutos/Segundos" required>
            </div>
      </div>
</div>


  <div class="shadow-none p-3 mb-5 bg-light rounded ">
                <!--Conograma do Edital -->
                    <br>
                    <h3>Cronograma do Edital</h3>
                    <br>
        <div class="form-row d-flex justify-content-center" id="1">
                    <!--Period de Inscrição-->
                    <div class="form-group col-md-2">
                      <label for="cadas-edit-data">Nome*</label>
                      <input type="text" class="form-control" value="" id="data-inscricao" name="perido-inscricao"  placeholder="Período" required>
                    </div>

                    <div class="form-group col-md-2">
                      <label for="data-divulgacao">Data*</label>
                      <input type="date" class="form-control"  value="" id="data-divulgacao" name="analise-documentacao" placeholder="Dia/Mês/Ano" required>
                    </div>

                    <!--Até-->
                    <div class="form-group col-md-2">
                      <label for="data-inscricao">Até*</label>
                      <input type="date" class="form-control" value="" id="data-inscricao" name="ate-inscricao" placeholder="Dia/Mês/Ano">
                    </div>
          </div>
              <br>
              <div class=" buton">
                  <button type="button" class="btn btn-success">Adicionar</button>
              </div>
                <br>
                <br>
  </div>

  <div class="shadow-none p-3 mb-5 bg-light rounded">
    <br>
  <div class="tablelaEdital">
        <h3> Tabela de Cronograma</h3>
        <br>


    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col-md-1">Nome</th>
          <th scope="col-md-1">Data</th>
          <th scope="col-md-1">Até</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Data Divulgação</th>
          <td>01/01/2019</td>
          <td>03/03/2019</td>
        </tr>
        <tr>
          <th scope="row">Data do Período de Inscrição </th>
          <td>01/01/2019</td>
          <td>03/03/2019</td>
        </tr>
        <tr>
          <th scope="row">Data Análise de Documentação</th>
          <td>28/02/2019</td>
          <td>02/03/2019</td>

        </tr>
      </tbody>
    </table>

      <br>
      <hr>
  </div>

  <br>

    <br>
    <br>
  </div>
  <div class="shadow-none p-3 mb-5 bg-light rounded ">
                <!--Conograma do Edital -->
                    <br>
                    <h3>Critério de Classificação</h3>
                    <br>
        <div class="form-row d-flex justify-content-center" id="1">
                    <!--Period de Inscrição-->
                    <div class="form-group col-md-2">
                      <label for="cadas-edit-data">Item*</label>
                      <input type="number" class="form-control" value="" id="data-inscricao" name="perido-inscricao"  placeholder="Número do Item" required>
                    </div>

                    <div class="form-group col-md-3">
                      <div class="mb-3">
                        <label for="validationTextarea">Pré-Requisito*</label>
                        <textarea class="form-control " id="validationTextarea" placeholder="Ex: Cursado integralmente em escola pública" required></textarea>
                      </div>
                    </div>

                    <div class="form-group col-md-2">
                      <label for="cadas-edit-data">Pontuação*</label>
                      <input type="number" class="form-control"  value=""id="data-divulgacao" name="analise-documentacao" placeholder="Ex: 0 Até 100" required>
                    </div>

          </div>
              <br>
              <div class=" buton">
                  <button type="button" class="btn btn-success">Adicionar</button>
              </div>
                <br>
                <br>
  </div>
  <div class="shadow-none p-3 mb-5 bg-light rounded">
    <br>
  <div class="tablelaEdital">
        <h3>Tabela de Critérios de Classificação</h3>
        <br>


    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col-md-1">Item</th>
          <th scope="col-md-1">Pré-Requisito</th>
          <th scope="col-md-1">Pontuação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">01</th>
          <td>Comprovar pertencer à unidade familiar que possui a menor renda per capita.</td>
          <td>0 Até 60</td>
        </tr>
        <tr>

          <th scope="row">02</th>
          <td>Comprovar ter cursado integralmente em escola pública, a modalidade de ensino anterior ao que esta cursando no IFRO, Campus Ji-Paraná.</td>
          <td>10</td>
        </tr>
        <tr>
          <th scope="row">03</th>
          <td>Comprovar que algum membro do núcleo familiar possui doença crônica (uma ou mais pessoas a mesma pontuação).</td>
          <td>10</td>
        </tr>
        <tr>
          <th scope="row">04</th>
          <td>Comprovar que possui idoso ou pessoa com deficiência no núcleo familiar (uma ou mais pessoas mesma pontuação).</td>
          <td>10</td>
        </tr>
        <tr>
          <th scope="row">05</th>
          <td>Comprovar Vulnerabilidades temporárias caracterizam-se pelo advento de riscos,
            perdas e danos à integridade pessoal e familiar (DECRETO No 6.307, DE 14 DE
            DEZEMBRO DE 2007), entre outros entre outras situações subjetivas verificadas
            pela CEAC).</td>
          <td>10</td>
        </tr>
      </tbody>
    </table>
    <hr>
    <br>
        <p class="font-weight-light">Cada Critério de Classificação terá que possuir sua respeciva pergunda ao Questionário Socioeconômico.</p>
      <br>
  </div>

  <br>

    <br>
    <br>
  </div>

  <div class="shadow-none p-3 mb-5 bg-light rounded ">
                <!--Conograma do Edital -->
                    <br>
                    <h3>Renda Per Capta</h3>
                    <br>
        <div class="form-row d-flex justify-content-center" id="1">



                    <div class="form-group col-md-3">
                      <label for="cadas-edit-data">De *</label>
                      <input type="number" class="form-control"  value=""id="data-divulgacao" name="analise-documentacao" placeholder="Ex: 100.00 Reais Por pessoa " required>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="cadas-edit-data">Até*</label>
                      <input type="number" class="form-control"  value=""id="data-divulgacao" name="analise-documentacao" placeholder="Ex: 1000.00 Reias Por Pessoa " required>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="cadas-edit-data">Pontuação*</label>
                      <input type="number" class="form-control"  value=""id="data-divulgacao" name="analise-documentacao" placeholder="Ex: 20" required>
                    </div>



          </div>
          <br>
          <p class="font-weight-light">"Valores referentes renda familiar total dividido pelo nÚmero de pessoas no nucleo familiar."</p>
              <br>
              <div class=" buton">
                  <button type="button" class="btn btn-success">Adicionar</button>
              </div>
                <br>
                <br>
  </div>
  <div class="shadow-none p-3 mb-5 bg-light rounded">
    <br>
  <div class="tablelaEdital">
        <h3>Tabela Renda Per Capta</h3>
        <br>


    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col-md-1">#</th>
          <th scope="col-md-1">De</th>
          <th scope="col-md-1">Até</th>
          <th scope="col-md-1">Pontuação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">01</th>
          <td>0</td>
          <td>R$ 160,00 </td>
          <td>60</td>
        </tr>
        <tr>
          <th scope="row">02</th>
          <td>R$ 160.01</td>
          <td> R$ 360.00 </td>
          <td>50</td>
        </tr>
        <tr>
          <th scope="row">03</th>
          <td>R$ 360,01</td>
          <td>R$ 660,00</td>
          <td>40</td>
        </tr>
        <tr>
          <th scope="row">04</th>
          <td>R$ 660,01</td>
          <td>R$ 960,00</td>
          <td>30</td>
        </tr>
        <tr>
          <th scope="row">05</th>
          <td>R$ 960,01</td>
          <td>R$ 1.431,60</td>
          <td>20</td>
        </tr>
        <tr>
          <th scope="row">06</th>
          <td>R$ 1.431,60</td>
          <td>DESCLASSIFICADO</td>
          <td>DESCLASSIFICADO</td>
        </tr>
      </tbody>
    </table>
    <hr>
    <br>
        <p class="font-weight-light">"No caso de haver empate, será considerado o critério de menor renda familiar e doença crônica na família, respectivamente."</p>
      <br>

  </div>

  <br>

    <br>
    <br>
  </div>



<div class="shadow-none p-3 mb-5 bg-light rounded">

              <!--Quantidade de Vaga por curso-->
              <br>
              <h3>Quantidade de Vagas por Curso</h3>
              <br>

            <div class="form-row" id="4">
            <div class="form-group col-md-3">
              <label for="exampleInputNaturalidade">Cursos*</label>
                <select class="custom-select mr-sm-2"  name="curso" value="" id="curso" required>
                    <option selected>Selecione sua Escolaridade</option>
                    <option value="1">Cursos de Graduação</option>
                    <option value="2">Cursos Técnicos Subsequentes</option>
                    <option value="3">Cursos Técnicos Integrados</option>
                </select>
            </div>

            <div class="form-group col-md-3">
              <label for="cadas-edit-titulo">Número de Vagas*</label>
              <input type="number" class="form-control" value="" name="numero-vagas"  id="eital-titulo" placeholder="Informe o Número de Vagas" required>
            </div>

            <div class="form-group col-md-3">
              <label for="cadas-edit-titulo">Número de Parcelas*</label>
              <input type="number" class="form-control"  value="" name="numero-parcelas" id="eital-titulo" placeholder="Informe o Número de Parcelas" required>
            </div>

            <div class="form-group col-md-2">
            <label for="cadas-edit-titulo">Valor Mensal*</label>
            <input type="number" class="form-control"  value="" name="valor-mensal" id="eital-titulo" placeholder="Informe o Valor Mensal" required>
            </div>

            <div class="form-group col-md-2">
            <label for="cadas-edit-titulo">Valor Total*</label>
            <input type="number" class="form-control"  value="" name="valor-mensal" id="eital-titulo" placeholder="Informe o Valor Total" required>
            </div>
          </div>

                <div class=" buton">
                <button type="button" class="btn btn-success">Adicionar</button>
            </div>
              <br>
              <br>
              <br>
             
          </div>
            
            
              
              

</div>
    </form>

    <div class="shadow-none p-3 mb-5 bg-light rounded">
      <br>
    <div class="tablelaEdital">
          <h3>Números de Vagas e Parcelas por Curso</h3>
          <br>


      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col-md-2">#</th>
            <th scope="col-md-2">Curso</th>
            <th scope="col-md-2">Número de Vagas</th>
            <th scope="col-md-2">Número de Parcelas</th>
            <th scope="col-md-2">Valor Mansal</th>
            <th scope="col-md-2">Valor Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">01</th>
            <th>Cursos de Graduação</th>
            <td>20</td>
            <td>12</td>
            <td>100,00</td>
            <td>120,000.000</td>
          </tr>
          <tr>
            <th scope="row">02</th>
            <th >Cursos Técnicos Subsequentes</th>
            <td>15</td>
            <td>12</td>
            <td>100,00</td>
            <td>195,000.000</td>
          </tr>
          <tr>
            <th scope="row">03</th>
            <th >Cursos Técnicos Integrados</th>
            <td>10</td>
            <td>12</td>
            <td>100,00</td>
            <td>110,000.00</td>
          </tr>
        </tbody>
      </table>

        <br>
        <hr>
    </div>

    <br>
      <div class="form-row buton">
        <button type="button" class="btn btn-success">Prosseguir com Cadastro de Questões -></button>
      </div>
      <br>
      <br>
    </div>
