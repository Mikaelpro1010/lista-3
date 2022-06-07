<?php
    $login= filter_input(INPUT_GET, 'login', FILTER_DEFAULT);
    $senha= filter_input(INPUT_GET, 'senha', FILTER_DEFAULT);

    session_start();
    date_default_timezone_set("America/Fortaleza");
    $_SESSION["tempo_inicial"] = date("H:i:s");
    if(isset($_SESSION["tempo_inicial"])){
        $tempo_inicial = $_SESSION["tempo_inicial"];
    }
    header("location:sair.php");
?>