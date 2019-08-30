<?php
include "connect.php";

$titulo = $_POST['titulo'];
$slug = $_POST['slug'];
$descricao = $_POST['descricao'];
$chaves = $_POST['palavras-chaves'];
$conteudo = $_POST['conteudo'];

mysqli_query($link,"insert into gabriel_noticia(titulo,slug,descricao,chaves,conteudo)
values('$titulo','$slug','$descricao','$chaves','$conteudo')");
header('location:create.php');
