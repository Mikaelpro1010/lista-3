<?php
    $login= filter_input(INPUT_GET, 'login', FILTER_DEFAULT);
    $senha= filter_input(INPUT_GET, 'senha', FILTER_DEFAULT);

    session_start();
    $_SESSION["new_session_login"]=$login;
    $_SESSION["new_session_senha"]=$senha;
        if($_SESSION["new_session_login"]=="Aluno" && $_SESSION["new_session_senha"]=="Aluno"){
            header("location:aluno.php");
        } elseif($_SESSION["new_session_login"]=="Professor" && $_SESSION["new_session_senha"]=="Professor"){
            header("location:professor.php");
        }

?>