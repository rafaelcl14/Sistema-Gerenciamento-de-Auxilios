<?php
    require_once 'session.php';

    if(Session::existeSession()) {
        if(Session::isFuncionario()) {
            header('location:../../index.php?p=perfilservidor');
        } else {
            header('location:../../index.php?p=cadastrodealuno');
        }
    } else{
        header('location:login-login/view-login.php');
    }
?>
