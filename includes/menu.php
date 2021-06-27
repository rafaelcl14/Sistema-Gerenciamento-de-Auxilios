<?php
    if (Session::existeSession()) {
        $caminhoPerfil = Session::isFuncionario() ? 'index.php?p=perfilservidor' : 'index.php?p=perfilaluno';
    }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">

    <a class="navbar-brand" href="index.php?p=home"> <img src="images/banner-logo3.png" width="134" alt="" class="rounded"></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <?php if (Session::existeSession()) { ?>

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php?p=home">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Aluno
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./index.php?p=cadastrodealuno">Cadastrar Aluno</a>
                    <a class="dropdown-item" href="./index.php?p=nucleofamiliar">Cadastrar Núcleo Familiar</a>
                </div>
            </li>

            <?php if (Session::isFuncionario()) { ?>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Servidor
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./index.php?p=cadastroservidor">Cadastrar</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Avaliação</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./index.php?p=recursos">Recursos</a>
                    <a class="dropdown-item" href="./index.php?p=perfilaluno">Perfil do Aluno</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edital</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./index.php?p=cadastrodeedital">Cadastrar Edital</a>
                    <a class="dropdown-item" href="./index.php?p=cadastrodetermo">Cadastrar Termo</a>
                    <a class="dropdown-item" href="./index.php?p=cadastrodequestoes">Cadastrar Questões</a>
                    <a class="dropdown-item" href="./index.php?p=cadastrodedocumentacao">Cadastrar Documentação</a>
                </div>
            </li>

            <?php } ?>

        </ul>

        <?php } ?>



        </div>

        <div class="">
          <form class="form-inline my-2 my-lg-0" action="" method="post">
      <input class="form-control mr-sm-2 " type="search" placeholder="Buscar" aria-label="Search">
      <a class="navbar-brand" >
          <button type="button" class="btn btn-warning" name="button">Buscar</button>
      </a>
    </form>
        </div>

        <?php if (Session::existeSession()) { ?>

        <div class="form-inline">
            <a class="navbar-brand" href="<?=$caminhoPerfil?>">
                <img src="images/perfil-pessoa-1.jpg" width="50" height="50" alt="" class="rounded-circle">
            </a>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=Session::getNomeUsuario()?></button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="<?=$caminhoPerfil?>">Perfil</a>
                    <form class="" action="control/login-ctrl.php" method="post">
                        <button class="dropdown-item" type="submit"  name="op" value="3">Sair</button>
                    </form>
                </div>
            </div>
        </div>

        <?php } else { ?>

        <div class="form-inline">
            <a href="views/login/login-login/view-login.php" class="btn btn-warning">Entrar</a>
        </div>

        <?php } ?>
</nav>
