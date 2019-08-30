<?php
include "connect.php";

$delete = $_POST['id'];
mysqli_query($link,"delete from gabriel_noticia WHERE id_noticia = '$delete'");
header('location:form_delete.php');