<?php
    $login_usuario= filter_input(INPUT_GET, 'login', FILTER_DEFAULT);

    session_start();
    $_SESSION["new_session_aluno"]= $login_usuario;
?>