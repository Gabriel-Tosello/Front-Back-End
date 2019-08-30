<?php
include "connect.php";

$procurar = $_POST['titulo'];
$read = mysqli_query($link,"SELECt * from gabriel_noticia WHERE titulo like '%$procurar%'");

if($vetor = mysqli_fetch_array($read)){
    $cod = $vetor['id_noticia'];
    $titulo = $vetor['titulo'];
    $slug = $vetor['slug'];
    $descricao = $vetor['descricao'];
    $chaves = $vetor['chaves'];
    $conteudo = $vetor['conteudo'];

    echo "Código: $cod<br>";
    echo "Título: $titulo<br>";
    echo "Slug: $slug<br>";
    echo "Descrição: $descricao<br>";
    echo "Palavras chaves: $chaves<br>";
    echo "Conteúdo: $conteudo<br>";
}

