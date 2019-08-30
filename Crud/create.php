<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSERT</title>
</head>
<body>
    
<a href="index.php"><-Voltar</a>

<h2>Digite o contéudo de sua notícia</h2>

<form action="insert.php" method="POST">
        <h3>Titulo:</h3>
        <input type="text" name="titulo" placeholder="Digite o título"><br>

        <h3>Slug:</h3>
        <input type="text" name="slug" placeholder="Digite a slug"><br>

        <h3>Descriçao:</h3>
        <input type="text" name="descricao" placeholder="Digite uma descrição"><br>

        <h3>Palavras-Chaves:</h3>
        <input type="text" name="palavras-chaves" placeholder="Digite as palavras chaves"><br>

        <h3>Conteudo:</h3>
        <textarea name="message" rows="10" cols="30" name="Conteudo" placeholder="Digite o conteudo da noticia">
        </textarea><br>

        <input type="submit" value="Gerar">

    </form>

</body>
</html>