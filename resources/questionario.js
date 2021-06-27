(function (){
    function Alternativa () {
        this.nome = "";

        this.setNome = function (nome) {
            this.nome = nome;
        }
    }

    function QuestaoEscolha() {
        this.tipo = "escolha";
        this.enunciado = "";
        this.permiteOutraAlternativaInformada = false;


        this.alternativas = [];

        this.setEnunciado = function (enunciado) {
            this.enunciado = enunciado;
        };

        this.setPermiteOutraAlternativaInformada = function (valor) {
            this.permiteOutraAlternativaInformada = valor;
        };

        this.addAlternativa = function (idCategoriaClicada, idQuestaoClicada, nome) {
            var nome = nome || "";

            var alternativa = new Alternativa();
            alternativa.setNome(nome);
            this.alternativas.push(alternativa);

            $('#container-questionario').find('#categorias').children().eq(idCategoriaClicada).find('.questoes').children().eq(idQuestaoClicada).find('.alternativas').append(
                "                                <div class='alternativa form-check input-group'>\n" +
                "                                    <input class='form-check-input' type='radio' disabled>\n" +
                "                                    <input class='input-alternativa form-control p-0 m-1' type='text' value='"+nome+"' placeholder='Digite o valor da alternativa...'>\n" +
                "                                <div class='input-group-append'>\n" +
                "                                   <button class='btn-remove-alternativa btn btn-outline-danger btn-sm my-1 btn-circle-sm'>X</button>\n" +
                "                            </div>\n" +
                "                                </div>"
            );


        };

        this.getTipo = function () {
            return this.tipo;
        }

        this.removeAlternativa = function(index) {
            this.getAlternativas().splice(index, 1);
        };

        this.getAlternativa = function (index) {
            return this.alternativas[index];
        };

        this.getAlternativas = function () {
            return this.alternativas;
        };

    }

    function QuestaoDescritiva() {
        this.tipo = "descritiva";
        this.enunciado = "";

        this.setEnunciado = function (enunciado) {
            this.enunciado = enunciado;
        }

        this.getTipo = function () {
            return this.tipo;
        }
    }

    function QuestaoAfirmativa() {
        this.tipo = "afirmativa";
        this.enunciado = "";

        this.setEnunciado = function (enunciado) {
            this.enunciado = enunciado;
        }

        this.getTipo = function () {
            return this.tipo;
        }
    }

    function Categoria () {
        this.nome = "";
        this.questoes = [];

        this.setNome = function (nome) {
            this.nome = nome;
        };

        this.addQuestaoAfirmativa = function (idCategoriaClicada, enunciado) {
            var enunciado = enunciado || "";

            var questao = new QuestaoAfirmativa();
            questao.setEnunciado(enunciado);
            this.questoes.push(questao);


            $('.categoria').eq(idCategoriaClicada).find('.questoes').append("<div class='questao mt-3'>\n" +
                "                            <div class='input-group'>\n" +
                "                                <div class='input-group-prepend'>\n" +
                "                                    <div class='label-questao form-control px-0'>Questão "+ (this.questoes.length) +" - </div>\n" +
                "                                </div>\n" +
                "                                <input class='input-enunciado form-control mx-2 px-2' type='text' value='"+enunciado+"' placeholder='Digite o enunciado da questão afirmativa...'>\n" +
                "                                <div class='input-group-append'>\n" +
                "                                    <button class='btn-remove-questao btn btn-outline-danger btn-sm mb-2 mr-2 rounded-pill'>Remover</button>\n" +
                "                                </div>\n" +
                "                            </div>\n" +
                "                            <div class='form-check ml-4'>\n" +
                "                                <input class='form-check-input' type='radio' disabled>\n" +
                "                                <div>Sim</div>\n" +
                "                            </div>\n" +
                "                            <div class='form-check ml-4'>\n" +
                "                                <input class='form-check-input' type='radio' disabled>\n" +
                "                                <div>Não</div>\n" +
                "                            </div>\n" +
                "                        </div>"
            );
        };

        this.addQuestaoDescritiva = function (idCategoriaClicada, enunciado) {
            var enunciado = enunciado || "";

            var questao = new QuestaoDescritiva();
            questao.setEnunciado(enunciado);
            this.questoes.push(questao);
            $('.categoria').eq(idCategoriaClicada).find('.questoes').append("" +
                "                       <div class='questao mt-3'>\n" +
                "                            <div class='input-group'>\n" +
                "                                <div class='input-group-prepend'>\n" +
                "                                    <div class='label-questao form-control px-0'>Questão "+ (this.questoes.length) +" - </div>\n" +
                "                                </div>\n" +
                "                                <input class='input-enunciado form-control  mx-2 px-2' type='text' value='"+enunciado+"' placeholder='Digite o enunciado da questão descritiva...'>\n" +
                "                                <div class='input-group-append'>\n" +
                "                                    <button class='btn-remove-questao btn btn-outline-danger btn-sm mb-2 mr-2 rounded-pill'>Remover</button>\n" +
                "                                </div>\n" +
                "                            </div>\n" +
                "                            <div class='form-group ml-4'>\n" +
                "                                <textarea class='form-control' rows='1' disabled></textarea>\n" +
                "                            </div>\n" +
                "                        </div>"
            );
        };

        this.addQuestaoEscolha = function (idCategoriaClicada, enunciado) {
            var enunciado = enunciado || "";

            var questao = new QuestaoEscolha();
            questao.setEnunciado(enunciado);
            this.questoes.push(questao);
            $('.categoria').eq(idCategoriaClicada).find('.questoes').append("<div class='questao mt-3'>\n" +
                "                            <div class='input-group'>\n" +
                "                                <div class='input-group-prepend'>\n" +
                "                                    <div class='label-questao form-control px-0'>Questão "+ (this.questoes.length) +" - </div>\n" +
                "                                </div>\n" +
                "                                <input class='input-enunciado form-control mx-2 px-2' type='text' value='"+enunciado+"' placeholder='Digite o enunciado da questão de multipla escolha...'>\n" +
                "                                <div class='input-group-append'>\n" +
                "                                    <button class='btn-remove-questao btn btn-outline-danger btn-sm mb-2 mr-2 rounded-pill'>Remover</button>\n" +
                "                                </div>\n" +
                "                            </div>\n" +
                "                            <div class='alternativas ml-4'>\n" +
                "\n" +
                "                            </div>\n" +
                "                            <div class='d-flex justify-content-start mt-3 ml-4'>\n" +
                "                                <button class='add-alternativa btn btn-outline-success btn-sm mb-2'>+ Alternativa</button>\n" +
                "                                <div class='alternativa form-check my-2 ml-3'>\n" +
                "                                    <input class='input-permite-outra-alternativa-informada form-check-input' type='checkbox'>\n" +
                "                                    <div>Permitir outra alternativa informada pelo aluno?</div>\n" +
                "                                </div>\n" +
                "                            </div>\n" +
                "\n" +
                "                        </div>"
            );
        };

        this.getQuestao = function (index) {
            return this.questoes[index];
        };

        this.removeQuestao = function (index) {
            this.questoes.splice(index, 1);
        };

        this.getQuestoes = function () {
            return this.questoes;
        };
    }

    function Questionario() {

        this.categorias = [];

        this.addCategoria = function (nome) {
            var nome = nome || "";

            var categoria = new Categoria();
            categoria.setNome(nome);

            this.categorias.push(categoria);

            $('#categorias').append("" +
                "                <div class='categoria  border rounded p-2 mb-3'>\n" +
                "\n" +
                "                    <div class='input-group'>\n" +
                "                        <div class='input-group-prepend'>\n" +
                "                            <div class='label-categoria form-control px-0'>Categoria "+ (this.categorias.length) +" - </div>\n" +
                "                        </div>\n" +
                "                        <input class='input-categoria form-control mx-2 px-2' type='text' value='"+nome+"' placeholder='Digite o nome da categoria...'>\n" +
                "                        <div class='input-group-append'>\n" +
                "                            <button class='btn-remove-categoria btn btn-outline-danger mb-2 rounded'>Remover</button>\n" +
                "                        </div>\n" +
                "                    </div>\n" +
                "\n" +
                "                    <!-- QUESTÕES -->\n" +
                "                    <div class='ml-4 questoes'>\n" +
                "                    </div>\n" +
                "\n" +
                "                    <div class='d-flex justify-content-start'>\n" +
                "                        <div class='dropdown'>\n" +
                "                            <button class='btn btn-outline-success btn-sm mb-2 mt-4 ml-4 dropdown-toggle' type='button' id='id-add-questao' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>+ Questão</button>\n" +
                "                            <div class='dropdown-menu' aria-labelledby='id-add-questao'>\n" +
                "                                <button class='quest-afirmativa dropdown-item'>Afirmativa</button>\n" +
                "                                <button class='quest-descritiva dropdown-item'>Descritiva</button>\n" +
                "                                <button class='quest-escolha dropdown-item'>Multipla escolha</button>\n" +
                "                                <div class='dropdown-divider'></div>\n" +
                "                                <button class='quest-cadastrada dropdown-item'>Questão cadastrada</button>\n" +
                "                            </div>\n" +
                "                        </div>\n" +
                "                    </div>\n" +
                "                </div>" +
                "");
        };

        this.getCategoria = function (index) {
            return this.categorias[index];
        };

        this.removeCategoria = function (index) {
            this.categorias.splice(index, 1);
        };

        this.getCategorias = function () {
            return this.categorias;
        };
    }

    var questionario = new Questionario();

    questionario.addCategoria("INFORMAÇÕES FAMILIARES");
    questionario.getCategoria(0).addQuestaoEscolha(0, "Quem é a pessoa responsável financeiramente pela sua família?");
    questionario.getCategoria(0).getQuestao(0).addAlternativa(0, 0, "Eu");
    questionario.getCategoria(0).getQuestao(0).addAlternativa(0, 0, "Pai");
    questionario.getCategoria(0).getQuestao(0).addAlternativa(0, 0, "Mãe");
    questionario.getCategoria(0).getQuestao(0).addAlternativa(0, 0, "Pai e Mãe");
    questionario.getCategoria(0).getQuestao(0).addAlternativa(0, 0, "Cônjuge/companheiro(a)");
    questionario.getCategoria(0).getQuestao(0).addAlternativa(0, 0, "Cônjuge/companheiro(a) e eu");
    questionario.getCategoria(0).getQuestao(0).addAlternativa(0, 0, "Avós");
    questionario.getCategoria(0).getQuestao(0).addAlternativa(0, 0, "Tios");
    questionario.getCategoria(0).getQuestao(0).addAlternativa(0, 0, "Irmão (a)");


    questionario.getCategoria(0).addQuestaoAfirmativa(0, "Você tem plano de saúde?");
    questionario.getCategoria(0).addQuestaoDescritiva(0, "Descreva algo que julgue necessário aqui:");

    //questionario.getCategoria(0).setNome("");

    // BOTAO PARA ADICIONAR CATEGORIAS
    $('#id-add-categoria').click(function () {
        questionario.addCategoria();
        $(".categoria").last().find('.input-categoria').focus();
        console.log(JSON.stringify(questionario));
        console.log(JSON.parse(JSON.stringify(questionario)));
    });

    // BOTÃO PARA ADICIONAR QUESTÕES
    $(document).on('click', '.dropdown-item', function(){
        var idCategoriaClicada = $(this).parent().parent().parent().parent().index();

        if ($(this).hasClass("quest-afirmativa")) {
            questionario.getCategoria(idCategoriaClicada).addQuestaoAfirmativa(idCategoriaClicada);
        } else if($(this).hasClass("quest-descritiva")) {
            questionario.getCategoria(idCategoriaClicada).addQuestaoDescritiva(idCategoriaClicada);
        } else if($(this).hasClass("quest-escolha")) {
            questionario.getCategoria(idCategoriaClicada).addQuestaoEscolha(idCategoriaClicada);
        } else if($(this).hasClass("quest-cadastrada")) {
            console.log("Cadastrada!");
        } else {
            console.log("Nenhuma!");
        }

        $('.categoria').eq(idCategoriaClicada).find('.questoes').children().last().find('.input-enunciado').focus();
    });

    // BOTÃO PARA ADICIONAR QUESTÕES
    $(document).on('click', '.add-alternativa', function(){
        var idQuestaoClicada = $(this).parent().parent().index();
        var idCategoriaClicada = $(this).parent().parent().parent().parent().index();

        questionario.getCategoria(idCategoriaClicada).getQuestao(idQuestaoClicada).addAlternativa(idCategoriaClicada, idQuestaoClicada);

        $('#container-questionario').find('#categorias').children().eq(idCategoriaClicada).find('.questoes').children().eq(idQuestaoClicada).find('.alternativas').children().last().find('.input-alternativa ').focus();
    });

    function enviarParaServidor(nomeQuestionario, conteudoQuestionario){
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: "views/teste/questionario.php",
            beforeSend: function(){//Chama o loading antes do carregamento
                //console.log("Carregando!");
            },
            data: {nome:nomeQuestionario, conteudo:conteudoQuestionario},
            success: function(data){
                if (!data) {
                    $('#id-titulo-edital').val("");
                    return;
                }
                console.log(JSON.parse(data));
            }
        });
    }

    $(document).on('click', '#id-salvar-questionario', function(){
        for (var c=0;c<questionario.getCategorias().length; c++) {
            var nomeCategoria = $('#container-questionario').find('#categorias').children().eq(c).find('.input-categoria').val();
            questionario.getCategoria(c).setNome(nomeCategoria);

            for (var q = 0; q < questionario.getCategoria(c).getQuestoes().length; q++) { // questões
                var enunciadoQuestao = $('#container-questionario').find('#categorias').children().eq(c).find('.questoes').children().eq(q).find('.input-enunciado').val();
                questionario.getCategoria(c).getQuestao(q).setEnunciado(enunciadoQuestao);

                if (questionario.getCategoria(c).getQuestao(q).getTipo() === "escolha") {
                    for (var a = 0; a < questionario.getCategoria(c).getQuestao(q).getAlternativas().length; a++) { // alternativas
                        var nomeAlternativa = $('#container-questionario').find('#categorias').children().eq(c).find('.questoes').children().eq(q).find('.alternativas').children().eq(a).find('.input-alternativa').val();
                        questionario.getCategoria(c).getQuestao(q).getAlternativa(a).setNome(nomeAlternativa);
                    }
                    var valor = $('#container-questionario').find('#categorias').children().eq(c).find('.questoes').children().eq(q).find('.input-permite-outra-alternativa-informada').is(':checked');
                    console.log(valor);
                    questionario.getCategoria(c).getQuestao(q).setPermiteOutraAlternativaInformada(valor);
                }
            }
        }

        console.log("\n\n");
        console.log(JSON.stringify(questionario));
        //alert("JSON gerado com sucesso!\n\n"+JSON.stringify(questionario));

        enviarParaServidor("teste nome", JSON.stringify(questionario));
    });

    $(document).on('click', '.btn-remove-categoria', function(){

        questionario.removeCategoria($(this).parent().parent().parent().index());
        $(this).parent().parent().parent().remove();

        for (var c=0;c<questionario.getCategorias().length; c++) {
            $('#container-questionario').find('#categorias').children().eq(c).find('.label-categoria').text("Categoria "+(c+1)+" - ");
        }
    });

    $(document).on('click', '.btn-remove-questao', function(){

        var indiceCategoria = $(this).parent().parent().parent().parent().parent().index();
        var indiceQuestao = $(this).parent().parent().parent().index();

        questionario.getCategoria(indiceCategoria).removeQuestao(indiceQuestao);
        $(this).parent().parent().parent().remove();

        for (var q=0;q<questionario.getCategoria(indiceCategoria).getQuestoes().length; q++) {
            $('#container-questionario').find('#categorias').children().eq(indiceCategoria).find('.questoes').children().eq(q).find('.label-questao').text("Questão "+(q+1)+" - ");
        }
    });

    $(document).on('click', '.btn-remove-alternativa', function(){

        var indiceAlternativa = $(this).parent().parent().index();
        var indiceQuestao = $(this).parent().parent().parent().parent().index();
        var indiceCategoria = $(this).parent().parent().parent().parent().parent().parent().index();

        questionario.getCategoria(indiceCategoria).getQuestao(indiceQuestao).removeAlternativa(indiceAlternativa);
        $(this).parent().parent().remove();

    });
}());