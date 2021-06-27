<?php require_once 'views/login/session.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php include('includes/libs-css.php'); ?>
        <link type="text/css" rel="stylesheet" href="libs/css/style.css">
        <title>SGA - Sistema Gerenciamento de Auxílios</title>
        <link rel="shortcut icon" href="views/login/img/favicon.ico">
    </head>
    <body>

        <header>
            <?php  require_once 'includes/menu.php'; ?>
        </header>

        <section>
            <?php
                if (isset($_GET["p"])) {
                    $valor = $_GET['p'];

                    switch ($valor) {
                        case 'home':                   include('views/home.php'); break;
                        case 'cadastroservidor':       include('views/servidor/cadastro-servidor.php');   break;
                        case 'perfilservidor':         include('views/servidor/perfil-servidor.php');     break;
                        case 'cadastrodeedital':       include('views/edital/cadastro-edital.php');       break;
                        case 'cadastrodetermo':        include('views/edital/cadastro-de-termo.php');     break;
                        case 'cadastrodequestoes':     include('views/edital/cadastro-de-questoes.php');  break;
                        case 'cadastrodealuno':        include('views/aluno/view-cadastro-aluno.php');    break;
                        case 'nucleofamiliar':         include('views/aluno/nucleo-familiar.php');        break;
                        case 'recursos':               include('views/avaliacao/recursos.php');           break;
                        case 'perfilaluno':            include('views/avaliacao/perfilaluno.php');        break;
                        case 'cadastrodedocumentacao': include('views/edital/cadastro-documentacao.php'); break;
                        default: echo '<h1>Página não encontrada!</h1>';
                    }

                } else {
                    include('views/home.php');
                }
            ?>
        </section>

        <footer>
            <?php include('includes/footer.php') ?>
        </footer>

        <?php include('includes/libs-javascript.php') ?>

        <script>

            $("#id-aluno-estado").change(function(){

                $.ajax({
                    type: 'POST',
                    dataType: 'JSON',
                    url: "views/teste/obter-cidades.php",
                    beforeSend: function(){//Chama o loading antes do carregamento
                        //console.log("Carregando!");
                    },
                    data: $('#cadastro-aluno').serialize(),
                    success: function(data){
                        if (!data) { return; }
                        $('#id-aluno-cidade').html("");
                        $('#id-aluno-cidade').append("<option value=''>Selecione Cidade</option>");
                        for (var cidade of data) {
                            $('#id-aluno-cidade').append("<option value="+cidade.id_cidade+">"+cidade.nome_cidade+"</option>");
                        }
                    }
                });


            });


            $("#id-numero-edital").change(function(){

                $.ajax({
                    type: 'POST',
                    dataType: 'JSON',
                    url: "views/teste/obter-titulo-edital.php",
                    beforeSend: function(){//Chama o loading antes do carregamento
                        //console.log("Carregando!");
                    },
                    data: $('#cadastro-termo').serialize(),
                    success: function(data){
                        if (!data) {
                            $('#id-titulo-edital').val("");
                            return;
                        }
                        $('#id-titulo-edital').val(data[0].titulo);
                    }
                });


            });




        </script>
        <script src="resources/questionario.js"></script>


    </body>
</html>
