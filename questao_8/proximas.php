<?php
    include_once("pagina_inicial.php");

    cabecalho("Proximas Provas");
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
                    <td>01/03/2018</td>
                    <td>Banco de dados</td>
                    <td>Consultas SQL</td>
                </tr>
            </tbody>
        </div>
</form>