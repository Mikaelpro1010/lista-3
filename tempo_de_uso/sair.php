<?php
    date_default_timezone_set("America/Fortaleza");
    $tempo_final = $_SESSION["tempo_final"] = date("H:i:s");
    // $tempo_inicial = $_SESSION["tempo_inicial"];
    // $tempo_final = $_SESSION["tempo_final"];
    function dateDifference($tempo_inicial , $tempo_final, $differenceFormat = '%a' )
    {
        $datetime1 = date_create($tempo_inicial);
        $datetime2 = date_create($tempo_final);
    
        $interval = date_diff($datetime1, $datetime2);
    
        return $interval->format($differenceFormat);
   
    }

    echo(dateDifference($tempo_inicial , $tempo_final, $differenceFormat = '%a'));
?>