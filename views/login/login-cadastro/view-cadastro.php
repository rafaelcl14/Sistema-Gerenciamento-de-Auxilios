<?php
    require_once '../../../resources/validacao.php';
    require_once '../session.php';

    $ver_cpf = isset($_SESSION['cpf_invalido']);
    $ver_email = isset($_SESSION['email_invalido']);
    $usuario_existente = isset($_SESSION['usuario_existente']);

    if(Session::existeSession()) {
        header('location:redireciona.php');
    }
    Session::destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../../../libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <title>SGA - Cadastrar</title>
        <link rel="shortcut icon" href="../img/favicon.ico">
    </head>
    <body>
        <div class="container ">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body border border-success">
                            <div class="d-flex justify-content-center">
                                <img src="../img/logo03.png" class="rounded-circle border border-success"width="50%" height="50%">
                            </div>
                            <br>
                            <?php if ($usuario_existente) { ?>
                              <div class="alert alert-danger text-center" role="alert">Este usuário já existe no sistema!</div>
                            <?php } ?>
                            <!-- Retirar email-->
                            <?php if ($ver_email) { ?>
                              <div class="alert alert-danger text-center" role="alert">E-mail inválido!</div>
                            <?php } ?>
                            <?php if($ver_cpf){?>
                                <div class="alert alert-danger text-center" role="alert">CPF inválido!</div>
                            <?php }?>
                            <form class="form-signin" method="post" action="../../../control/login-ctrl.php" name="formlogin" id="formlogin" onsubmit="return validarSenha(this)">
                            <script type="text/javascript">
                              function validarSenha(form) {
                                var senha1 = form.senha.value;
                                var senha2 = form.confirmacaoSenha.value;
                                var div = document.getElementById('id');

                                  if (senha1 != senha2 || senha1 == '' || senha1 == null) {
                                    //  alert('Senhas diferentes!');
                                    div.innerHTML = '<div class="alert alert-danger text-center" role="alert">As senhas diferem!</div>';
                                      return false;
                                  } else {
                                      //document.formlogin.submit();
                                      return true;
                                  }
                              }
                              </script>

                              <div id="id">

                              </div>

                              <script type="text/javascript">
                              function formatar(mascara, documento){
                                var i = documento.value.length;
                                var saida = mascara.substring(0,1);
                                var texto = mascara.substring(i)

                                if (texto.substring(0,1) != saida){
                                  documento.value += texto.substring(0,1);
                                }
                              }
                              </script>

                              <fieldset>
                                <div class="form-label-group">
                                    <label for="cpf">CPF:</label>
                                    <input class="form-control" maxlength="14" type="text" name="usuario" placeholder="Digite seu CPF..." OnKeyPress="formatar('###.###.###-##', this)" required autofocus>
                                </div>
                                <br>
                                <div class="form-label-group">
                                    <label for="e-mail">E-MAIL:</label>
                                    <input class="form-control" type="email" name="e-mail" placeholder="Digite seu e-mail..." required>
                                </div>

                                <br>
                                <div class="form-label-group">
                                    <label for="senha">SENHA:</label>
                                    <input id="senha" class="form-control" type="password" name="senha" placeholder="Digite sua senha..." required>
                                </div>
                                <br>
                                <div class="form-label-group">
                                    <label for="confirmacaoSenha">CONFIRME SUA SENHA:</label>
                                    <input id="confirmacaoSenha" class="form-control" type="password" name="confirmacaoSenha" placeholder="Confirme sua senha..." required>
                                </div>
                                <br>
                                <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" value="1" name="op">CADASTRAR</button>
                            <!--    <input type="submit" name="op" class="btn btn-lg btn-success btn-block text-uppercase" value="CADASTRAR">
                            -->
                              </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../../../libs/jquery/jquery-3.3.1.slim.min.js"></script>
        <script src="../../../libs/popper/popper.min.js"></script>
        <script src="../../../libs/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
