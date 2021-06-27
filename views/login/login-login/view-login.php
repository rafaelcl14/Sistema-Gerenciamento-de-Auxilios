<?php
    require_once '../session.php';

    $loginInvalido = isset($_SESSION['loginInvalido']);

    if(Session::existeSession()) {
        header('location:../redireciona.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../../../libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <title>SGA - Entrar</title>
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
                            <?php if($loginInvalido) { ?>
                                <div class="alert alert-danger text-center" role="alert">Usuário ou senha inválidos!</div>
                            <?php session_destroy(); } ?>
                            <form class="form-signin" method="post" action="../../../control/login-ctrl.php" name="formlogin">
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
                                <div class="form-label-group">
                                    <label for="usuario">CPF/SIAPE:</label>
                                    <input class="form-control" maxlength="14" type="text" name="usuario" placeholder="Digite seu CPF ou SIAPE..." OnKeyPress="formatar('###.###.###-##', this)" required autofocus>
                                </div>
                                <br>
                                <div class="form-label-group">
                                    <label for="senha">SENHA:</label>
                                    <input class="form-control" type="password" name="senha" placeholder="Digite sua Senha..." required>
                                </div>
                                <br>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="lembre-me">
                                    <label class="custom-control-label" for="lembre-me">Lembre-me!</label>
                                </div>

                                <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" value="2" name="op">ENTRAR</button>
                                <br>
                                <div class="d-flex justify-content-center"><a href="../login-cadastro/view-cadastro.php">Não é cadastrado(a)? Cadastre-se aqui!</a></div>
                                <br>

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
