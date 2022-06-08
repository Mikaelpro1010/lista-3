<?php
    $login_usuario= filter_input(INPUT_GET, 'login', FILTER_DEFAULT);

    session_start();
    date_default_timezone_set("America/Fortaleza");
    $_SESSION["new_session_aluno"]= $login_usuario;
    $_SESSION["new_session_entrou"]= date('Y-m-d H:i:s');
    if(isset($_SESSION["new_session_entrou"])){
        echo($_SESSION["new_session_entrou"]);
    } else{
        session_unset($_SESSION["new_session_entrou"]);
    }

?>