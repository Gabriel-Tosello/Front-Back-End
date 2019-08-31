<?php
include "connect.php";

$read = mysqli_query($link,"SELECt titulo,chaves,descricao from gabriel_noticia WHERE id_noticia= 4");

if($vetor = mysqli_fetch_array($read)){
    $titulo = $vetor['titulo'];
    $chaves = $vetor['chaves'];
    $descricao = $vetor['descricao'];

    echo "<h3 style='text-align: center;'>Título:<br>" . $titulo . "</h3><br>";
    echo "<h4 style='text-align: center;'>Palavras chaves:<br>" . $chaves . "</h3><br>";
    echo "<p style='text-align: center;'>Descrição:<br>" . $descricao . "</p><br>";
    
}
