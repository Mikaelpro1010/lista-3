<?php
    $path = "./";
    $diretorio = dir($path);
        echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
        while($arquivo = $diretorio -> read()){
            $lista[] = "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
        }
        usort($lista, "strnatcmp");
        print_r($lista);

    $diretorio -> close();  

    // echo(asort($lista_1));
    
?>