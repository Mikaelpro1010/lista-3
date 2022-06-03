<?php
    $login= filter_input(INPUT_GET, 'login', FILTER_DEFAULT);
    $senha= filter_input(INPUT_GET, 'senha', FILTER_DEFAULT);

    session_start();
    $_SESSION["new_session"]=$login;
    $_SESSION["new_session"]=$senha;

?>