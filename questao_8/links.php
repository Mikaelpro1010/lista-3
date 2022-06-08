<?php
    include_once("pagina_inicial.php");

    cabecalho("Pagina do cadastro");
?>

<form class="row g-3" action="verifica.php" method="GET">
        <div class="row col-2 g-3 mx-auto">
            <a href="cadastro.php">Cadastro</a>
            <a href="proximas.php">Proximas Provas</a>
            <a href="anteriores.php">Provas Anteriores</a>
        </div>
</form>

<?php
    rodape();
?>