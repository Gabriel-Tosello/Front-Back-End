<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DELETE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
<a href="index.php"><-Voltar</a>

<form action="delete.php" method="POST">

    <div class="bloco2">
        <h2>Delete uma notícia</h2>

        <h3>Código identificador da notícia:</h3>
        <input type="text" name="cod" placeholder="Digite o codígo"><br><br>

        <input type="submit" value="Deletar">
    </div>

</form>

</body>
</html>