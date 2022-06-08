<?php
    include_once("pagina_inicial.php");

    cabecalho("Provas Anteriores");
?>

<form class="row g-3 container" action="verifica.php" method="GET">
        <div class="row col-2 g-3 mx-auto">
            <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th>
                        Data
                    </th>
                    <th>
                        Disciplina
                    </th>
                    <th>
                        Conteudo
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>19/03/2018</td>
                    <td>Programacao</td>
                    <td>Entrada de dados</td>
                </tr>
                <tr>
                    <td>27/03/2018</td>
                    <td>Analise</td>
                    <td>Diagrama de classe</td>
                </tr>
            </tbody>
        </div>
</form>