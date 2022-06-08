<?php
    include_once("pagina_inicial.php");

    cabecalho("Cadastro");
?>


<form class="row g-3 container" action="verifica.php" method="GET">
        <div class="row col-2 g-3 mx-auto">
            <label>Data:</label> <input id="date" type="date">
            <label for="login" class="form-label">Disciplina:</label>
            <input type="text" name="login" id="login" class="form-control">

            <input class="btn btn-success" type="submit" value="Enviar">
        </div>
</form>