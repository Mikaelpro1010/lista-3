<?php
    $login= filter_input(INPUT_GET, 'arquivo', FILTER_DEFAULT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="story">Meu editor de textos:</label>
    <textarea id="arquivo" name="story"
        rows="5" cols="33">
        It was a dark and stormy night...
    </textarea>
    <input class="btn btn-success" type="submit" value="Salvar">
</body>
</html>