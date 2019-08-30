<?php
include "connect.php";

$cod = $_POST['cod'];
$titulo = $_POST['titulo'];
$slug = $_POST['slug'];
$descricao = $_POST['descricao'];
$chaves = $_POST['palavras-chaves'];
$conteudo = $_POST['conteudo'];

mysqli_query($link,"update gabriel_noticia set titulo = '$titulo',
slug = '$slug', descricao = '$descricao', chaves = '$chaves', conteudo = '$conteudo' WHERE id_noticia = '$cod'");
header('location:form_update.php');