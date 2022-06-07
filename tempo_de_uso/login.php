<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="row g-3" action="verifica_1.php" method="GET">
        <div class="row col-2 g-3 mx-auto">
        <label for="login" class="form-label">Informe o seu login:</label>
        <input type="text" name="login" id="login" class="form-control">

        <label for="senha" class="form-label">Informe a sua senha:</label>
        <input type="text" name="senha" id="senha" class="form-control">

        <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>