<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud noticias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<br>

<div class="bloco">
    <h1>Notícias - CRUD</h1>
    <hr color=#fff;>

    <h3><a class="link" href="create.php">Escreva sua notícia</a></h3>

    <h3><a class="link" href="form_select.php">Procure por uma notícia</a></h3>

    <h3><a class="link" href="form_update.php">Atualize e edite uma notícia</a></h3>
        
    <h3><a class="link" href="delete.php">Delete uma notícia</a></h3>
</div>

<br>

<!--NOTICIAS-->

<div class="bloco3">

    <h2>Últimas notícias</h2>
    <hr color=#fff;>

</div>

<main class="servicos">

    <article class="servico">
        <div>
            
            <?php
            
            include "connect.php";
            include "read-noticia.php";
            
            ?>
        
        </div>
    </article>  
     
    <article class="servico">
        <div>
            <?php
            
            include "connect.php";
            include "read-noticia.php";
            
            ?>
        </div>
    </article>
</main>

</body>
</html>