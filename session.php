<?php
        $top3["Anita"] = "Show das Poderosas";
        $top3["Luan Santna"] = "Te Espernado";
        $top3["Pollo"] = "Vagalumes";
    
session_start();
    foreach($top3 as $top){
        $_SESSION["new_session"]=$top;
        echo($_SESSION["new_session"]."<br>");
    }
?>